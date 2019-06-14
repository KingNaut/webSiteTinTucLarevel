<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use  App\Http\Requests\ThemChuyenMucRequest;
use App\Http\Requests\SuaChuyenMucRequest;
use PhpParser\Node\Expr\List_;
use App\Chuyenmuc,Auth;
use Illuminate\Support\Facades\DB;

class ChuyenMucController extends Controller
{
    public  function LayDSChuyenMuc()
    {
        $chuyenmucs=Chuyenmuc::paginate(10);

        return view('admin.hienchuyenmuc')->with('chuyenmucs',$chuyenmucs);

    }
    public function getxoaChuyenMuc($id)
    {
        Chuyenmuc::findOrFail($id)->delete();
        return back()->with('success', "Bạn đã xóa thành công!");
    }
    public function getsuachuyenmuc($id)
    {
        $chuyenmuc = Chuyenmuc::where('id', $id)->firstOrFail()->toArray();

        return view('admin.suacm',['chuyenmuc' => $chuyenmuc]);
    }
    public function postsuachuyenmuc(Request $rq,$id)
    {
        $chuyenmuc = Chuyenmuc::where('id', $id)->firstOrFail();
        $chuyenmuc->tencm = $rq->txttencm;

        $chuyenmuc->save();
        return redirect('admins/suacm/'.$chuyenmuc->id)->with('success','Bạn đã sửa thành công!');
    }
    public function getthemchuyenmuc()
    {

        return view('admin.themchuyenmuc');
    }
    public function postthemchuyenmuc(ThemChuyenMucRequest $rq)
    {
        $chuyenmuc = new Chuyenmuc();
        $chuyenmuc->tencm = $rq->txttencm;
        $chuyenmuc->duongdancm = Str::slug($rq->txttencm, '-');
        $chuyenmuc->save();
        return redirect()->route('get-hien-chuyen-muc')->with('success','Bạn đã thêm thành công!')->withInput();

    }
}
