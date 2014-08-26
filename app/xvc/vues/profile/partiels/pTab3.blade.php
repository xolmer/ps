{{Form::open(array('route' => 'user.updateAvatar','files' => true, 'class' => 'form-horizontal form-groups-bordered' ,'id' => 'upload-profile-picture-form'))}}

{{Form::imageUploadSet('avatar',Lang::get('phrases.selectYourProfilePic'))}}

<div class="form-group">
    <div class="col-sm-5">
         {{Form::submit(Lang::get('ui.buttons.updateAvatar'),array('class' => 'btn btn-primary  farsi'))}}

         @if($currentUser->has_avatar)
         <a class="btn btn-red farsi" href="#removeavatar" onclick='$.post("{{URL::route('user.removeAvatar')}}").done(function(){location.reload(true);});'> {{Lang::get('ui.buttons.removeCurrentAvatar')}}</a>
         @endif

    </div>
</div>

{{Form::close()}}

