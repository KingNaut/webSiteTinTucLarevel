@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-14">
                    @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Danh Sách Bài Viết</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Chức Năng</th>
                                    <th >ID</th>
                                    <th >Tên bài viết</th>
                                    <th >Tóm tắt nội dung</th>
                                    <th >Nội dung bài viết</th>
                                    <th >Đường dẫn bài viết</th>
                                    <th >Link ảnh mô tả</th>
                                    <th >lượt xem</th>
                                    <th >Ngày đăng</th>
                                    <th >Mã chuyên mục</th>
                                    <th >Mã thành viên</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($baiviets as $baiviet)
                                    <tr>
                                        <td>
                                            <a href="{{url('admins/suabaiviet/'.$baiviet->id)}}">
                                                <button class="btn btn-sm btn-pill btn-info" type="button" aria-pressed="true">Sửa</button>
                                            </a>
                                            <a href="{{url('admins/xoabaiviet/'.$baiviet->id)}}">
                                                <button class="btn btn-sm btn-pill btn-danger" type="button" aria-pressed="true">Xóa</button>
                                            </a>
                                        </td>
                                        <td>{{$baiviet->id}}</td>
                                        <td>{{$baiviet->tenbv}}</td>
                                        <td>{{$baiviet->tomtatnoidung}}</td>
                                        <td>{!! mb_substr(strip_tags($baiviet->noidungbv),0,250) !!}</td>
                                        <td>{{$baiviet->duongdanbv}}</td>
                                        <td><img src="{{$baiviet->linkanhmota}}" width="300" height="300"></td>
                                        <td>{{$baiviet->luotxem}}</td>
                                        <td>{{$baiviet->ngaydang}}</td>
                                        <td>{{$baiviet->macm}}</td>
                                        <td>{{$baiviet->matv}}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav>
                                {!! $baiviets->links() !!}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
    </div>




@endsection