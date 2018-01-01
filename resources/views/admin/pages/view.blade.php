@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pages
                <small>pages view</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('pages.list')}}">Pages</a></li>
                <li class="active">View</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('admin.components.alert')
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pages List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th>Key</th>
                                    <th>Value</th>
                                </tr>
                                @foreach($model->toArray() as $key => $value)

                                    @if($key != 'id' && $key != 'role')
                                        <tr>
                                            <td width="500">{{ucwords(str_replace('_',' ',$key))}}</td>
                                            @if($key == 'news_image')
                                                <td>
                                                    <img src="{{asset('images/'.$value)}}" width="20%">
                                                </td>
                                            @else
                                                <td>{!!$value!!}</td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <button class="btn btn-primary" onclick="window.location.href='{{route('pages.list')}}'">Go Back</button>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection