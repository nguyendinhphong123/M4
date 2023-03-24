<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MaytinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('bai-tap2.may-tinh.baitapmaytinh');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

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

    public function hienthi(Request $request)
    {
        $sothunhat = $request->sothunhat;
        $sothuhai = $request->sothuhai;
        $pheptinh = $request->pheptinh;

         if($sothunhat!="" && $sothuhai!= ""){
                switch ($pheptinh) {
                    case '+':
                        $ketqua = $sothunhat + $sothuhai;
                        echo "Kết quả :".$ketqua ;
                        break;
                    case '-':
                        $ketqua = $sothunhat - $sothuhai;
                        echo"Kết quả : ". $ketqua ;
                        break;
                    case '*':
                        $ketqua = $sothunhat * $sothuhai;
                        echo"Kết quả : ". $ketqua ;
                        break;
                    case '/':
                        if($sothuhai == 0){
                            echo 'lỗi';
                        }else{
                            $ketqua = $sothunhat / $sothuhai;
                            echo "Kết quả : ". $ketqua ;
                        }
                        break;
                }}else{
                    echo 'nhập số đi thằng ngu';
                }
                return view('bai-tap2.may-tinh.baitapmaytinh');
    }
}
