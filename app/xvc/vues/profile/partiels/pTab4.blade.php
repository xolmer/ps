{{Form::open(array('route' => 'user.updatePassword', 'class'=>'form-horizontal'))}}

{{Form::passwordInputSet('current_password')}}

{{Form::passwordInputSet('password')}}

{{Form::passwordInputSet('password_confirmation')}}

<div class="form-group">
    <div class="col-sm-5">
         {{Form::submit(Lang::get('ui.buttons.update'),array('class' => 'btn btn-primary  farsi'))}}

    </div>
</div>
{{Form::close()}}