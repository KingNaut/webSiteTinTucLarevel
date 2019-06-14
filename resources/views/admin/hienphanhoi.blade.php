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
                    <i class="fa fa-align-justify"></i> Danh Sách Thành Viên</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                       <thead>
                        <tr>
                            <th >ID</th>
                            <th >Họ Tên </th>
                            <th >Email</th>
                            <th >Nội Dung Phản Hồi</th>
                            <th>Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($phanhois as $phanhoi)
                            <tr>
                                <td>{{$phanhoi->id}}</td>
                                <td>{{$phanhoi->tennguoiph}}</td>
                                <td>{{$phanhoi->emailnguoiph}}</td>
                                <td>{{$phanhoi->noidungph}}</td>
                                <td>
                                 <center>   <a href="{{url('admins/xoaphanhoi/'.$phanhoi->id)}}">
                                       <button class="btn btn-sm btn-pill btn-danger" type="button" aria-pressed="true">Xóa</button>
                                    </a></center>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav>
                        {!! $phanhois->links() !!}
                    </nav>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
        </div>
    </div>

@endsection