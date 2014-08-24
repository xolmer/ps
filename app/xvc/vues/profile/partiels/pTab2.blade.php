{{Form::model($currentUser,array('class'=>'form-horizontal'))}}

{{Form::textInputSet('first_name')}}

{{Form::textInputSet('last_name')}}

{{Form::textInputSet('mobile_number')}}

{{Form::countrySelectSet('country_of_residence',[],$currentUser->country_of_residence)}}

{{Form::textInputSet('email_address',['ltr'])}}

{{Form::timezoneSelectSet('timezone',[],$currentUser->timezone)}}

{{Form::close()}}