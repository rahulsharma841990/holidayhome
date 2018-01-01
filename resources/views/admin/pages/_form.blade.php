
<div class="form-body">
    <div class="form-group form-md-line-input{{ $errors->has('page_title') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Title')!!}
        {!!Form::text('page_title',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('page_title'))
          <span class="help-block">
                {{ $errors->first('page_title') }}
          </span>
        @endif
    </div>
    
    <div class="form-group form-md-line-input{{ $errors->has('content') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Content')!!}
        {!!Form::textarea('content',null,['class'=>'form-control','id'=>'editor1'])!!}
        
        @if($errors->has('content'))
          <span class="help-block">
                {{ $errors->first('content') }}
          </span>
        @endif
    </div>

    <div class="form-group form-md-line-input{{ $errors->has('page_slug') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Page Slug')!!}
        {!!Form::text('page_slug',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('page_slug'))
          <span class="help-block">
                {{ $errors->first('page_slug') }}
          </span>
        @endif
    </div>

    <div class="form-group form-md-line-input{{ $errors->has('status') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Publish')!!}
        {!!Form::select('status',['1'=>'Yes','0'=>'No'],null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('status'))
          <span class="help-block">
                {{ $errors->first('status') }}
          </span>
        @endif
    </div>
</div>
<div class="form-actions noborder">
    {!!Form::submit('Save Page',['class'=>'btn btn-success'])!!}
    {!!Form::button('Go Back',['class'=>'btn btn-primary','onclick'=>'window.location.href="'.route('pages.list').'"'])!!}
</div>