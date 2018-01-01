@extends('admin.layouts.main')
@section('content')
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pages
                <small>create page</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('pages.list')}}">pages</a></li>
                <li class="active">Create</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Create Page</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            {!!Form::open(['route'=>'save.page','role'=>'form','files'=>true])!!}
                                @include('admin.pages._form')
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
