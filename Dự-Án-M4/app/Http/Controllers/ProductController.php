<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        $products = Product::paginate(4);
        
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product();
        $products->name=$request->name;     
        $products->price=$request->price;     
        $products->quantity=$request->quantity;     
        $products->description=$request->description;     
        $products->category_id=$request->category_id;     
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'uploads/product/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $products->image = $new_image;
            $data['product_image'] = $new_image;
        }
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('view', Product::class);

        $productshow = Product::findOrFail($id);
        $param =[
            'productshow'=>$productshow,
        ];

        // $productshow-> show();
        return view('admin.products.show',  $param );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->name;
        $products->price=$request->price;     
        $products->quantity=$request->quantity;     
        $products->description=$request->description;     
        $products->category_id=$request->category_id;     
        $get_image=$request->image;
        if($get_image){
            $path='uploads/product/'.$products->image;
            if(file_exists($path)){
                unlink($path);
            }
        $path='uploads/product/';
        $get_name_image=$get_image->getClientOriginalName();
        $name_image=current(explode('.',$get_name_image));
        $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $products->image=$new_image;
        // dd($product);

        $data['product_image']=$new_image;
        }
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $products = Product::onlyTrashed()->findOrFail($id);
            $products->forceDelete();
            return redirect()->back()->with('status', 'Xóa sản phẩm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Vì sản phẩm đang được order nên không thể xóa');
        }
      
    
      

      
    }
    public  function softdeletes($id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $product = Product::findOrFail($id);
        $product->deleted_at = date("Y-m-d h:i:s");
        $product->save();
        return redirect()->back()->with('status', 'Sản phẩm đã được thêm vào thùng rác');
    }
    public function restoredelete($id) {
        $products = Product::withTrashed()->where('id',$id);
        $products->restore();
        return redirect()->route('product.trash')->with('status', 'Khôi phục sản phẩm thành công');
    }
    public  function trash()
    {
        $products = Product::onlyTrashed()->paginate(3);
        $param = ['products' => $products];
        return view('admin.products.trash', $param);
        // dd(223);
    }
}
