<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function xinchao(){
        echo "Chào các bạn";
    }
    public function Hoten($ten){
        echo "Tên là: ".$ten;
        //gọi route
        return redirect()->route('Test3');
    }
    public function Geturl(Request $request){
         // return $request->path(); lay route goi ra thoi
       // return $request->url(); lay toan bo url
       //kt phuong thuc truyen get or post
       if ($request->isMethod('get')) {
           echo "Laf phuowng thuc get";
       }else
       echo "Khong la get";
    }
    public function postForm(Request $request){
        echo $request->HoTen;
    }
    //cookie
    public function setcookie(){
        $response= new Response();
        $response->withCookie('abc','Giá trị',1);
        return $response;
    }
    public function getcookie(Request $request){
        return $request->cookie('abc');
    }
    //upload file
    public function postFile(Request $request){
        //kiem tra file co ton tai khong
        if ($request->hasFile('myFile')) {
            $file=$request->file('myFile');
            if ($file->getClientOriginalExtension('myFile') == "jpg") {//kiem tra dinh dang cia file
                $filename=$file->getClientOriginalName('myFile');//lay ten file la ten file up len
                $file->move('images',$filename);
            }else{
                echo "Khong dung dinh dang";
            }
        
        }else{
            echo "chua co file";
        }
    }
    //Json
    public function getJson(){
        $array= ['Huy go','quanghuy','Laravel','html'];
        return response()->json( $array);
    }
    //view
    public function myView()
    {
        //return view('myView');
        return view('layout.header');//goi view trong thu muc layout
    }
    //truyen dl tren view
    public function Time($t){
          return view('myView',['time'=>$t]);
    }
    public function truyendl($test){
        if ($test=="Laravel") {
            return view('pages.test');
        }elseif ($test=="php") {
            return view('pages.php');
        }
    }
}
