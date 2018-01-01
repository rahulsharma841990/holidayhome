
<div class="form-body">
    <div class="form-group form-md-line-input{{ $errors->has('slider_title') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Title')!!}
        {!!Form::text('slider_title',null,['class'=>'form-control','id'=>'form_control_1'])!!}
        @if($errors->has('slider_title'))
          <span class="help-block">
                {{ $errors->first('slider_title') }}
          </span>
        @endif
    </div>
    
    <div class="form-group form-md-line-input{{ $errors->has('news_id') ? ' has-error' : '' }}">
        {!!Form::label('form_control_1','Select News Associate')!!}
        {!!Form::select('news_id',App\News::pluck('news_title','id'),null,['class'=>'form-control','placeholder'=>'Select News Associate'])!!}
        
        @if($errors->has('news_id'))
          <span class="help-block">
                {{ $errors->first('news_id') }}
          </span>
        @endif
    </div>

</div>
<div class="form-actions noborder">
    {!!Form::submit('Save Slider',['class'=>'btn btn-success'])!!}
    {!!Form::button('Go Back',['class'=>'btn btn-primary','onclick'=>'window.location.href="'.route('slider.list').'"'])!!}
</div>