<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $users = User::orderBy('id','DESC')->get();
        // $users = User::search()->paginate(4);
        $param = [
            'users' => $users,
        ];
        return view('admin.users.index', $param);
    }

    public function showAdmin()
    {
        $admins = User::get();
        $param = [
            'admins' => $admins,
        ];
        return view('user.admin', $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
        $groups = Group::get();
        $param = [
            'groups' => $groups,
        ];
        return view('admin.users.add', $param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->group_id = $request->group_id;
        $file = $request->image;
        if ($request->hasFile('image')){
            $file = $request->image;
            $fileExtension = $file->getClientOriginalExtension(); //jpg,png lấy ra định dạng file và trả về
            $fileName = time(); //45678908766 tạo tên file theo thời gian
            $newFileName = $fileName . '.' . $fileExtension; //45678908766.jpg
            $path = 'storage/' . $request->file('image')->store('avatar', 'public'); //lưu file vào mục public/images với tê mới là $newFileName
            $user->image = $path;
        }
        // if ($request->hasFile('image')) {
        //     $fileExtension = $file->getClientOriginalName();
        //     //Lưu file vào thư mục storage/app/public/image với tên mới
        //     $request->file('image')->storeAs('uploads/user/', $fileExtension);
        //     // Gán trường image của đối tượng task với tên mới
        //     $user->image = $fileExtension;
        // }
        $user->save();

        $data = [
            'name' => $request->name,
            'pass' => $request->password,
        ];


        $notification = [
            'message' => 'Đăng ký thành công!',
            'alert-type' => 'success'
        ];
        return redirect()->route('user.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', User::class);
        $user = User::findOrFail($id);
        $param =[
            'user'=>$user,
        ];


        // $productshow-> show();
        return view('admin.users.profile', $param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          // $this->authorize('view', User::class);
          $user = User::find($id);
          $groups=Group::get();
          $param = [
              'user' => $user ,
              'groups' => $groups
          ];
          return view('admin.users.edit', $param);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->group_id = $request->group_id;
        $file = $request->image;
        if ($request->hasFile('image')){
            $image = str_replace('storage', 'public', $user->image);
            Storage::delete($image);
            $file = $request->image;
            $fileExtension = $file->getClientOriginalExtension(); //jpg,png lấy ra định dạng file và trả về
            $fileName = time(); //45678908766 tạo tên file theo thời gian
            $newFileName = $fileName . '.' . $fileExtension; //45678908766.jpg
            $path = 'storage/' . $request->file('image')->store('avatar', 'public'); //lưu file vào mục public/images với tê mới là $newFileName
            $user->image = $path;
        }
        $user->save();
        $notification = [
            'message' => 'Chỉnh Sửa Thành Công!',
            'alert-type' => 'success'
        ];
        return redirect()->route('user.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('forceDelete', Product::class);
        $notification = [
            'sainhap' => '!',
        ];

        $user = User::find($id);
        $image = str_replace('storage', 'public', $user->image);
            Storage::delete($image);
        if($user->group->name!='Supper Admin'){
            $user->delete();
        }
        else{
            return dd(__METHOD__);
        }
    }
}
