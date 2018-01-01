
<div class="form-body">
    <div class="form-group form-md-line-input{{ $errors->has('package_name') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Package Name')!!}
        {!!Form::text('package_name',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('package_name'))
          <span class="help-block">
                {{ $errors->first('package_name') }}
          </span>
        @endif
    </div>
    
    <div class="form-group form-md-line-input{{ $errors->has('package_description') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Description')!!}
        {!!Form::textarea('package_description',null,['class'=>'form-control','id'=>'editor1'])!!}
        
        @if($errors->has('package_description'))
          <span class="help-block">
                {{ $errors->first('package_description') }}
          </span>
        @endif
    </div>

    <div class="form-group form-md-line-input{{ $errors->has('package_amount') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Package Amount')!!}
        {!!Form::text('package_amount',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('package_amount'))
          <span class="help-block">
                {{ $errors->first('package_amount') }}
          </span>
        @endif
    </div>

</div>
<div class="form-actions noborder">
    {!!Form::submit('Save Package',['class'=>'btn btn-success'])!!}
    {!!Form::button('Go Back',['class'=>'btn btn-primary','onclick'=>'window.location.href="'.route('packages.list').'"'])!!}
</div>