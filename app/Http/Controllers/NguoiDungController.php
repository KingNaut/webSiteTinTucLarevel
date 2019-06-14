<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Baiviet;
use App\Chuyenmuc;
use App\Phanhoi;
use App\Binhluan;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;
//where('baiviets.created_at', '>=', Carbon::now()->subHours(72))
class NguoiDungController extends Controller
{
    public function danhsachbaiviet()
    {
      $baiviets = Baiviet::latest('id')->paginate(5);

        $users = User::find($baiviets['matv']);
        $chuyenmuc = Chuyenmuc::find($baiviets['macm']);
        $bvdau = DB::table('baiviets') ->limit(3)->get();

        return view('nguoidung.trangchu',['baiviets' => $baiviets,'users'=>$users,'chuyenmuc' => $chuyenmuc,'bvdau'=>$bvdau]);
    }

    public function hienbaiviet($slug)
    {
        $baiviet = Baiviet::where('duongdanbv','=',$slug)->firstOrFail()->toArray();

        $user = User::find($baiviet['matv']);
        $chuyenmuc = Chuyenmuc::find($baiviet['macm']);
        $binhluan = Binhluan::where('mabv','=',$baiviet['id'])->get();

        return view('nguoidung.baiviet',['baiviet' => $baiviet,'user'=>$user,'chuyenmuc' => $chuyenmuc,'binhluan' => $binhluan]);
    }

    public function dsbvamthuc()
    {
        $baiviets = Baiviet::where('macm','=',1)->latest('id')->paginate(20);

        $users = User::find($baiviets['matv']);

        return view('nguoidung.amthuc',['baiviets' => $baiviets,'users'=>$users]);
    }
    public function dsbvdulichamthuc()
    {
        $baiviets = Baiviet::where('macm','=',3)->latest('id')->paginate(20);

        $users = User::find($baiviets['matv']);

        return view('nguoidung.dulichamthuc',['baiviets' => $baiviets,'users'=>$users]);
    }
    public function dsbvtinamthuc()
    {
        $baiviets = Baiviet::where('macm','=',5)->latest('id')->paginate(20);

        $users = User::find($baiviets['matv']);

        return view('nguoidung.tinamthuc',['baiviets' => $baiviets,'users'=>$users]);
    }
    public function dsbvchebienmonngon()
{
    $baiviets = Baiviet::where('macm','=',4)->latest('id')->paginate(20);

    $users = User::find($baiviets['matv']);

    return view('nguoidung.chebienmonngon',['baiviets' => $baiviets,'users'=>$users]);
}
//////////////////////Phản hồi

    public function getphanhoi()
    {

        return view('nguoidung.lienhe');

    }
    public function postphanhoi(Request $rq)
    {
        $phanhoi = new Phanhoi;
        $phanhoi->tennguoiph = $rq->txttennguoiph;
        $phanhoi->emailnguoiph = $rq->txtemailnguoiph;
        $phanhoi->noidungph = $rq->txtnoidungph;
        $phanhoi->save();
        return redirect()->route('get-phan-hoi')->with('success','Bạn đã thêm thành công!')->withInput();
    }
    public function postbl(Request $rq)
    {
        $binhluan = new Binhluan;
        $binhluan->mabv = $rq->txtmabv;
        $binhluan->tennguoibl = $rq->txttennguoibl;
        $binhluan->emailnguoibl = $rq->txtemailnguoibl;
        $binhluan->noidungbl = $rq->txtnoidungbl;
        $binhluan->save();
        return back();
    }


}
