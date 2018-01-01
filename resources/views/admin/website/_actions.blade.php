<a href="{{route('website.view',$model->id)}}" title="View">
	<i class="fa fa-eye"></i>
</a> &nbsp;|&nbsp;
<a href="{{route('website.edit',$model->id)}}" title="Edit">
	<i class="fa fa-pencil"></i>
</a> &nbsp;|&nbsp;
<a data-link="{{route('website.delete',$model->id)}}" href="javascript:;" title="Delete" class="deleteNews">
	<i class="fa fa-trash" style="color:red;"></i>
</a>