<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        $products = Product::all();
        return response()->json($products,200);
    }

   
    public function store( $request)
    {
        // kiem tra du lieu gui len
    //    echo '<pre>';
    //    print_r($request->all());
    //    die();
       // xac thuc du lieu
        // Validator
        // FormRequest

       // luu du lieu
       $user = new Product();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->name = $request->name;
       $user->image = '';
       $user->birthday = date('Y-m-d');
       try {
           $user->save();
           $data = [
               'success' => true,
               'data'    => $user
           ];
       } catch (\Exception $e) {
           $data = [
               'success' => false,
               'message'    => $e->getMessage()
           ];
       }
       return response()->json($data);
       // tra ve du lieu vua luu

    }

 
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $data = [
            'data' => $product
        ];
        return response()->json($product,200);
    }

 
    public function update(Request $request, $id)
    {
        $user = Product::find($id);
        $user->name = $request->name;
        try {
            $user->save();
            $data = [
                'success' => true,
                'data'    => $user
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
    }

    public function destroy($id)
    {
        $user = Product::find($id);
        try {
            $user->delete();
            $data = [
                'success' => true,
                'data'    => $user
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
    }
}
