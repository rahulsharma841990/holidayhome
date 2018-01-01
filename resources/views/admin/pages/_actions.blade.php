<a href="{{route('page.view',$model->id)}}" title="View">
	<i class="fa fa-eye"></i>
</a> &nbsp;|&nbsp;
<a href="{{route('page.edit',$model->id)}}" title="Edit">
	<i class="fa fa-pencil"></i>
</a> &nbsp;|&nbsp;
<a data-link="{{route('page.delete',$model->id)}}" href="javascript:;" title="Delete" class="deleteNews">
	<i class="fa fa-trash" style="color:red;"></i>
</a>