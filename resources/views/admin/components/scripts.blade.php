<!-- jQuery 3 -->
<script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js')}} charts -->
{{-- <script src="{{asset('adminlte/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/morris.js/morris.min.js')}}"></script> --}}
<!-- Sparkline -->
<script src="{{asset('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script> --}}
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('adminlte/dist/js/demo.js')}}"></script> --}}
<script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>
<script src="{{asset('adminlte/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
  	var options = {
	    filebrowserImageBrowseUrl: '{{url('/laravel-filemanager?type=Images')}}',
	    filebrowserImageUploadUrl: '{{url('/laravel-filemanager/upload?type=Images&_token=')}}',
	    filebrowserBrowseUrl: '{{url('/laravel-filemanager?type=Files')}}',
	    filebrowserUploadUrl: '{{url('/laravel-filemanager/upload?type=Files&_token=')}}'
	  };
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1',options)
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@if(@$dataTable != null)
	{!! @$dataTable->scripts() !!}
@endif
<script type="text/javascript">
	$(document).ready(function(){
		$('body').on('click','.deleteNews',function(){
			if(confirm('Are you sure to delete?')){
				window.location.href=$(this).attr('data-link');
			}
		});
	});
</script>

{!! Menu::scripts() !!}