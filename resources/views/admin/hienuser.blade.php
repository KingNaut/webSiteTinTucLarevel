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
                            <th >Họ tên Thành Viên</th>
                            <th >Email</th>
                            <th >Lever</th>
                            <th>Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->lever}}</td>

                                <td>
                                    <a href="{{url('admins/suauser/'.$user->id)}}">
                                        <button class="btn btn-sm btn-pill btn-info" type="button" aria-pressed="true">Sửa</button>
                                    </a>
                                    <a href="{{url('admins/xoauser/'.$user->id)}}">
                                        <button class="btn btn-sm btn-pill btn-danger" type="button" aria-pressed="true">Xóa</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav>
                        {!! $users->links() !!}
                    </nav>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
        </div>
    </div>


@endsection