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

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');




    /**
    *  ADMIN ROUTE
     */
Route::group([ 'middleware' => 'auth'], function()
{

    Route::get('/admins', function (){
        return view('admin.index');
    });
    //user

    Route::get('admins/register', function (){
      return view('register');
    });

    Route::get('/admins/dsuser', 'UserController@layDSThanhVien')->name('get-hien-user');
    ///suauser
    Route::get('/admins/suauser/{id}', 'UserController@getEditUser')->name('get-edit-user');
    Route::post('/admins/suauser/{id}', 'UserController@postEditUser')->name('post-edit-user');
    /////themuser

    Route::get('/admins/themuser', 'UserController@getAddUser')->name('get-add-user');
    Route::post('/admins/themuser', 'UserController@postAddUser')->name('post-add-user');
    ///xoauser
    Route::get('/admins/xoauser/{id}', 'UserController@getxoaUser')->name('get-xoa-user');


    //////////////////////////baiviet
    Route::get('/admins/dsbaiviet','BaiVietController@LayDSBaiViet')->name('get-hien-bai-viet');

    Route::get('/admins/xoabaiviet/{id}', 'BaiVietController@getxoaBaiViet')->name('get-xoa-bai-viet');

    Route::get('admins/thembaiviet', 'BaiVietController@getthemBaiViet')->name('get-them-bai-viet');
    Route::post('/admins/thembaiviet', 'BaiVietController@postthemBaiViet')->name('post-them-bai-viet');

    Route::get('/admins/suabaiviet/{id}', 'BaiVietController@getEditbaiviet')->name('get-edit-baiviet');
    Route::post('/admins/suabaiviet/{id}', 'BaiVietController@postEditbaiviet')->name('post-edit-baiviet');
    ///ph
    Route::get('/admins/hienphanhoi', 'BaiVietController@getphanhoi')->name('get-hien-phan-hoi');


    ///////////////////////////Chuyen muc
    Route::get('/admins/dschuyenmuc', 'ChuyenMucController@LayDSChuyenMuc')->name('get-hien-chuyen-muc');

    Route::get('/admins/xoachuyenmuc/{id}', 'ChuyenMucController@getxoaChuyenMuc')->name('get-xoa-chuyen-muc');

    Route::get('/admins/suacm/{id}', 'ChuyenMucController@getsuachuyenmuc')->name('get-sua-chuyen-muc');
    Route::post('/admins/suacm/{id}', 'ChuyenMucController@postsuachuyenmuc')->name('post-sua-chuyen-muc');



    Route::get('/admins/themchuyenmuc', 'ChuyenMucController@getthemchuyenmuc')->name('get-them-chuyen-muc');
    Route::post('/admins/themchuyenmuc', 'ChuyenMucController@postthemchuyenmuc')->name('post-them-chuyen-muc');

});


/**
     *NGUOI DUNG
    */


    Route::get('/404', function ()
    {
        return view('nguoidung.404');
    });
    Route::get('/', function ()
    {
        return view('nguoidung.trangchu');
    });
Route::get('/','NguoiDungController@danhsachbaiviet');

Route::get('/baiviet/{slug}','NguoiDungController@hienbaiviet');

Route::get('/am-thuc','NguoiDungController@dsbvamthuc');
Route::get('/du-lich-am-thuc','NguoiDungController@dsbvdulichamthuc');
Route::get('/tin-am-thuc','NguoiDungController@dsbvtinamthuc');
Route::get('/che-bien-mon-ngon','NguoiDungController@dsbvchebienmonngon');

////////////bình luận

Route::get('/binh-luan', 'NguoiDungController@postbl')->name('post-bl');

Route::post('/binh-luan', 'NguoiDungController@postbl')->name('post-bl');
/////////////////phản hồi

Route::get('/lien-he', 'NguoiDungController@getphanhoi')->name('get-phan-hoi');
Route::post('/lien-he', 'NguoiDungController@postphanhoi')->name('post-phan-hoi');
///////////////////////////////////
Route::get('/index', function ()
{
    return view('layouts.admin');
});

?>
