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
                        <label class="col-2 col-form-label">Tên Bài Viết</label>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Nhập tên bài viết*" name="txttenbv" value="{{ old('txttenbv') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Tóm tắt nội dung</label>
                        <div class="col-10">
                            <textarea class="form-control" maxlength="250" rows="3" placeholder="Nhập nội dung*" name="txttomtatnoidung">{{ old('txttomtatnoidung') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Nội dung</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="10" placeholder="Nhập nội dung*"name="txtnoidungbv">{{ old('txtnoidungbv') }}</textarea>
                        </div>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'txtnoidungbv' );
                        </script>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Link ảnh mô tả</label>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Nhập Link ảnh mô tả*" name="txtlinkanhmota" value="{{ old('txtlinkanhmota') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Mã Chuyên Mục</label>
                                               <select name="txtmacm" id="txtmacm">
                            @foreach($dsChuyenMuc as $chuyenMuc)
                                <option value="{{ $chuyenMuc->id }}">{{ $chuyenMuc->tencm }}</option>
                            @endforeach
                        </select>

                    </div>

                    <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">Đăng bài</button>
                </form>
            </div>
        </div>
    </div>
@endsection