
<div class="form-body">
    <div class="form-group form-md-line-input{{ $errors->has('title') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Title')!!}
        {!!Form::text('news_title',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('title'))
          <span class="help-block">
                {{ $errors->first('title') }}
          </span>
        @endif
    </div>
    
    <div class="form-group form-md-line-input{{ $errors->has('news_description') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Description')!!}
        {!!Form::textarea('news_description',null,['class'=>'form-control','id'=>'editor1'])!!}
        
        @if($errors->has('news_description'))
          <span class="help-block">
                {{ $errors->first('news_description') }}
          </span>
        @endif
    </div>

    <div class="form-group form-md-line-input{{ $errors->has('file') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','News Image')!!}
        {!!Form::file('file',['class'=>'form-control','id'=>'editor1'])!!}
        
        @if($errors->has('file'))
          <span class="help-block">
                {{ $errors->first('file') }}
          </span>
        @endif
    </div>
    @if(isset($model))
	    <div class="form-group form-md-line-input">
	    	<img src="{{asset('images/'.$model->news_image)}}" width="10%" />
	    </div>
    @endif
</div>
<div class="form-actions noborder">
    {!!Form::submit('Save News',['class'=>'btn btn-success'])!!}
    {!!Form::button('Go Back',['class'=>'btn btn-primary','onclick'=>'window.location.href="'.route('news.list').'"'])!!}
</div>