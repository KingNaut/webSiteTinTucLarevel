<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;
use App\User;
use App\Http\Requests\ThemUserRequest;
use App\Http\Requests\EditUserRequest;

class UserController extends Controller
{
    public  function layDSThanhVien()
    {
        $users = User::paginate(10);
        return view('admin.hienuser')->with('users',$users);
    }
    public function getEditUser($id)
    {
        $user=User::where('id', $id)->first()->toArray();
        return view('admin.suauser',['user' => $user]);
    }
    public function postEditUser(EditUserRequest $rq,$id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user->name = $rq->txtname;
        $user->email = $rq->email;
        $user->lever = $rq->txtlever;
        $user->save();
        return redirect('admins/suauser/'.$user->id)->with('success','Bạn đã sửa thành công!');
    }
    public function getAddUser()
    {

        return view('admin.themuser');

    }
    public function postAddUser(ThemUserRequest $rq)
    {
        $user = new User;
        $user->name = $rq->txtname;
        $user->email = $rq->txtemail;
        $user->lever = $rq->txtlever;
        $user->password = $rq->txtmatkhau;
        $user->save();
        return redirect()->route('get-hien-user')->with('success','Bạn đã thêm thành công!')->withInput();
    }
    public function getxoaUser($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', "Bạn đã xóa thành công!");

    }
}
