@extends('Backend.Master.master')
@section('active-user')
    class="active"
@endsection
@section('user')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thành viên</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            @if (session('key'))
                            <div class="alert bg-{{ session('key') }}" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg>{{ session('content') }}<a href="#" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove"></span></a>
                            </div> 
                             @endif
                            <a href="{{ route('user.create') }}" class="btn btn-primary">Thêm Thành viên</a>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Full</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Level</th>
                                        <th width='18%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $item)
                                
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->full }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->level }}</td>
                                        <td>
                                            <a href="{{ route('user.edit',['id'=>$item->id]) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                            <a onclick="return confirm('Bạn có muốn xóa thành viên này?')" href="{{ route('user.delete',['id'=>$item->id]) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                       
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div align='right'>
                                {{$users->links()}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <!--/.row-->
        </div>
@endsection