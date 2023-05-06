<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        if($request->product){
            $search = $request->product;
          $products=  Product::where('name', 'LIKE', '%' . $search . '%')->paginate(8);
        }
        else{
            $products = Product::paginate(8);
        }
      
        $param = [
            'products' => $products,
            'cart' => $cart,
        ];

        return view('shop.home', $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nameVi" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                'image' => $product->image,
                'max' => $product->quantity,
            ];
        }
        session()->put('cart', $cart);
        $data = [];
        $data['cart'] = session()->has('cart');
        // dd($data);
        return redirect()->back()->with('status','123');
    }

    public function cart(Request $request)
    {
        $products = Product::get();
        $categories = Category::all();
        $cart = session()->get('cart', []);
        $param = [
            'products' => $products,
            'categories' => $categories,
            'cart' => $cart,
        ];
        return view('shop.cart', $param);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $categorys = Category::get();
        $cart = session()->get('cart', []);
        $param = [
            'product' => $product,
            'categorys' => $categorys,
            'cart' => $cart,
        ];
        return view('shop.show', $param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function indexlogin()
    {
        
        return view('loginlogout.login');
    }
    public function checklogin(Request $request)
    {
            $arr = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if (Auth::guard('customers')->attempt($arr)) {
                return redirect()->route('shop.index');
            } else {
                return redirect()->route('login.index');
            }
    }
    public function register(){
        return view('loginlogout.register');
    }
    public function checkregister(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        try {
            $customer->save();
            return redirect()->route('login.index');
        } catch (\Exception $e) {
            Log::error("message:" . $e->getMessage());
        }

        if ($request->password == $request->confirmpassword) {
            $customer->save();
            return redirect()->route('shop.index');
        } else {
            return redirect()->route('shop.register');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('shop.index');
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function checkOuts()
    {
        return view('shop.checkout');
    }
    public function order(Request $request)
    {
        if ($request->product_id == null) {
            return redirect()->back();
        } else {
            $id = Auth::guard('customers')->user()->id;
            $data = Customer::find($id);
            $data->address = $request->address;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;

            if (isset($request->note)) {
                $data->note = $request->note;
            }
            $data->save();

            $order = new Order();
            $order->customer_id = Auth::guard('customers')->user()->id;
            $order->date_at = date('Y-m-d H:i:s');
            $order->total = $request->totalAll;
            $order->save();
        }
        $count_product = count($request->product_id);
        for ($i = 0; $i < $count_product; $i++) {
            $orderItem = new OrderDetail();
            $orderItem->order_id =  $order->id;
            $orderItem->product_id = $request->product_id[$i];
            $orderItem->quantity = $request->quantity[$i];
            $orderItem->price = $request->price;
            $orderItem->total = $request->total[$i];
            $orderItem->save();
            session()->forget('cart');
            DB::table('products')
                ->where('id', '=', $orderItem->product_id)
                ->decrement('quantity', $orderItem->quantity);
        }
        $notification = [
            'message' => 'success',
        ];
        $data = [
            'name' => $request->name,
            'pass' => $request->password,
        ];
        // Mail::send('mail.mail', compact('data'), function ($email) use ($request) {
        //     $email->subject('Shein Shop');
        //     $email->to($request->email, $request->name);
        // });

        // dd($request);
        // alert()->success('Thêm Đơn Đặt: '.$request->name,'Thành Công');
        return redirect()->route('shop.index')->with($notification);;
        // }
        // } catch (\Exception $e) {
        //     // dd($request);
        //     Log::error($e->getMessage());
        //     // toast('Đặt hàng thấy bại!', 'error', 'top-right');
        //     return redirect()->route('shop.index');
        // }
    }
}
