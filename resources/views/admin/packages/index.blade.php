@extends('admin.layouts.main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Packages
	            <small>packages list</small>
	        </h1>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	            <li class="active">Packages</li>
	        </ol>
	    </section>
	    <!-- Main content -->
	    <section class="content">
	    	@include('admin.components.alert')
	        <div class="row">
	            <div class="col-xs-12">
	                <div class="box">
	                    <div class="box-header">
	                        <h3 class="box-title">Packages List</h3>
	                    </div>
	                    <!-- /.box-header -->
	                    <div class="box-body">
	                    	<a href="{{route('package.create')}}" class="btn btn-primary">Add Package</a> 
	                        {!! $dataTable->table() !!}
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