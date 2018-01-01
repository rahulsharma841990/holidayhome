
<div class="form-body">
    <div class="form-group form-md-line-input{{ $errors->has('website_title') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Website Title')!!}
        {!!Form::text('website_title',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('website_title'))
          <span class="help-block">
                {{ $errors->first('website_title') }}
          </span>
        @endif
    </div>

    <div class="form-group form-md-line-input{{ $errors->has('website_link') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Website Link')!!}
        {!!Form::text('website_link',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('website_link'))
          <span class="help-block">
                {{ $errors->first('website_link') }}
          </span>
        @endif
    </div>
</div>
<div class="form-actions noborder">
    {!!Form::submit('Save Website',['class'=>'btn btn-success'])!!}
    {!!Form::button('Go Back',['class'=>'btn btn-primary','onclick'=>'window.location.href="'.route('websites.list').'"'])!!}
</div>