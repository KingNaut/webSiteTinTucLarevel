<?php

namespace App\Http\Controllers;

use App\Baiviet;
use Illuminate\Support\Str;
use App\Chuyenmuc;
use  App\Phanhoi;
use App\Http\Requests\SuaBaiVietRequest;
use App\Http\Requests\ThemBaiVietRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaiVietController extends Controller
{
    public function LayDSBaiViet()
    {
        $baiviets=Baiviet::paginate(3);
        return view('admin.hienbaiviet')->with('baiviets',$baiviets);

    }
    public function getphanhoi()
    {
        $phanhois=Phanhoi::paginate(5);
        return view('admin.hienphanhoi')->with('phanhois',$phanhois);

    }
    public function getxoaBaiViet($id)
    {
        Baiviet::findOrFail($id)->delete();
        return back()->with('mess', "Bạn đã xóa thành công!");

    }
    public function getEditbaiviet($id)
    {
        $baiviet=Baiviet::where('id', $id)->firstOrFail()->toArray();
        $dsChuyenMuc = Chuyenmuc::all();
        return view('admin.suabaiviet',['baiviet' => $baiviet,'dsChuyenMuc' => $dsChuyenMuc]);
    }
    public function postEditbaiviet(SuaBaiVietRequest $rq,$id)
    {
        $baiviet = Baiviet::where('id', $id)->firstOrFail();
        $baiviet->tenbv = $rq->txttenbv;
        $baiviet->tomtatnoidung = $rq->txttomtatnoidung;
        $baiviet->noidungbv = $rq->txtnoidungbv;
        $baiviet->linkanhmota = $rq->txtlinkanhmota;
        $baiviet->duongdanbv = Str::slug($rq->txttenbv, '-');
        $baiviet->macm = $rq->txtmacm;
        $baiviet->matv = Auth::user()->id;
        $baiviet->luotxem=0;
        $baiviet->save();
        return redirect('admins/suabaiviet/'.$baiviet->id)->with('success','Bạn đã sửa thành công!');
    }
    public function getthemBaiViet()
    {
        $dsChuyenMuc = Chuyenmuc::all();
        return view('admin.thembaiviet',['dsChuyenMuc' => $dsChuyenMuc]);
    }
    public function postthemBaiViet(ThemBaiVietRequest $rq)
    {
        $baiviet = new Baiviet;
        $baiviet->tenbv = $rq->txttenbv;
        $baiviet->tomtatnoidung = $rq->txttomtatnoidung;
        $baiviet->noidungbv = $rq->txtnoidungbv;
        $baiviet->linkanhmota = $rq->txtlinkanhmota;
        $baiviet->duongdanbv = Str::slug($rq->txttenbv, '-');
        $baiviet->macm = $rq->txtmacm;
        $baiviet->matv = Auth::user()->id;
        $baiviet->luotxem=0;
        $baiviet->save();
        return redirect()->route('get-hien-bai-viet')->with('success','Bạn đã thêm thành công!')->withInput();
    }

}
