@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="p-20">
                <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <b>Lỗi!! Bạn vui vòng kiểm tra lại:</b>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Họ và Tên</label>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Nhập họ và tên *" name="txtname" value="{{ old('txtname',$user['name']) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="1" placeholder="Nhập Email*" name="email">{{ old('email',$user['email']) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Lever</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="1" placeholder="Nhập lever *" name="txtlever">{{ old('txtlever',$user['lever']) }}</textarea>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">Sửa User</button>
                </form>
            </div>
        </div>
    </div>
@endsection