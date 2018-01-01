@extends('admin.layouts.main')
@section('content')
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sliders
                <small>create slider</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('slider.list')}}">Sliders</a></li>
                <li class="active">Create</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Create Slider</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            {!!Form::open(['route'=>'save.slider','role'=>'form'])!!}
                                @include('admin.slider._form')
                            {!!Form::close()!!}
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
