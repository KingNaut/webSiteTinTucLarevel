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
                        <label class="col-2 col-form-label">Tên Chuyên Mục</label>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Nhập tên chuyên mục*" name="txttencm" value="{{ old('txttencm') }}">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">Thêm Chuyên Mục</button>
                </form>
            </div>
        </div>
    </div>
@endsection