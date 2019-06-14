@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Danh Sách Chuyên Mục</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th >ID</th>
                                    <th >Tên Chuyên Mục</th>
                                    <th >Dường Dẫn Chuyên Mục</th>
                                    <th>Chức Năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($chuyenmucs as $chuyenmuc)
                                    <tr>
                                        <td>{{$chuyenmuc->id}}</td>
                                        <td>{{$chuyenmuc->tencm}}</td>
                                        <td>{{$chuyenmuc->duongdancm}}</td>
                                        <td>
                                            <a href="{{url('admins/suacm/'.$chuyenmuc->id)}}">
                                                <button class="btn btn-sm btn-pill btn-info" type="button" aria-pressed="true">Sửa</button>
                                            </a>
                                            <a href="{{url('admins/xoachuyenmuc/'.$chuyenmuc->id)}}">
                                                <button class="btn btn-sm btn-pill btn-danger" type="button" aria-pressed="true">Xóa</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav>
                                {!! $chuyenmucs->links() !!}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
    </div>


@endsection