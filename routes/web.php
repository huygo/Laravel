<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Khoahoc' ,function(){
    return "Chao xìn";
});
// truyen_tham_so
Route::get('Hoten/{ten}', function ($ten) {
    echo "Tên của bạn là: ".$ten;
});
//gán tên
Route::get('Test1',[ 'as'=>'Test',function () {
        echo "Gán test1 =test";
}]);
//gán tên 2
Route::get('Test2', function () {
    echo  "Đặt test2 có tên là test3";
})->name('Test3');
//gọi route
Route::get('Goiten', function () {
    return redirect()->route('Test3');
});
//Nhóm group
Route::group(['prefix' => 'admin'], function () {
     Route::get('users1', function () {
         echo "User1";
     });
     Route::get('users2', function () {
         echo "User2";
     });
     Route::get('users3', function () {
         echo "User3";
     });
});
//goi controller
Route::get('Goicontroller','Mycontroller@xinchao' );
//truyen du lieu cho controller
Route::get('Truyendl/{ten}', 'Mycontroller@Hoten');
//URL
Route::get('Myrequest', 'Mycontroller@Geturl') ;

//gui nhan dl voi request
Route::get('Form', function () {
    //goi view
     return view('postForm');
});

Route::post('postForm', ['as'=>'postForm','uses'=>'Mycontroller@postForm']) ;
//cookie
Route::get('setcookie',  'Mycontroller@setcookie');
Route::get('getcookie', 'Mycontroller@getcookie' );
//upload file
Route::get('uploadFile', function () {
    return view('postFile');
});
Route::post('postFile', ['as'=>'postFile','uses'=>'MyController@postFile']);
//Json
Route::get('getJson','MyController@getJson' );
//gọi view
Route::get('goiview','MyController@myView' ); 
//truyen dl cho view
Route::get('Time/{t}', 'MyController@Time');
view()->share('khoahoc', 'abc');
