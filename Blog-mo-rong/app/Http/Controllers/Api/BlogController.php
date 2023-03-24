<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Resources\BlogResource;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Blog::all();
        $data = [
            'success' => true,
            'data'    => $items
        ];
        return response()->json($data);
    }


    public function store(StoreBlogRequest $request)
    {
        //luu du lieu
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        
        try {
            $blog->save();
            $data = [
                'success' => true,
                'data'    => $blog
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
        //tra ve du lieu vua luu
    }


    public function show(string $id)
    {
        return new BlogResource(Blog::findOrFail($id));
    }

 
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        try {
            $blog->save();
            $data = [
                'success' => true,
                'data'    => $blog
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
    }

   
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        try {
            $blog->delete();
            $data = [
                'success' => true,
                'data'    => $blog
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
