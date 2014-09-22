<div class="form-group farsi {{Form::groupIsInvalid('first_name')}}">
    {{Form::label('first_name', Lang::get('words.first_name'), array('class' => 'col-sm-3
    control-label'))}}
    <div class="col-sm-5">
        {{Form::text('first_name', null, array('class' => 'form-control',
        "data-bind" => "value:personalDetails.first_name",
        'id' => 'first_name','placeholder'=> Lang::get('words.first_name')))}}
        <div class="help-block">
            {{Form::error('first_name')}}
            <ul>
                <li>{{Lang::get('phrases.help-block.customer.first_name.1')}}</li>
                <li>{{Lang::get('phrases.help-block.customer.first_name.2')}}</li>
                <li>{{Lang::get('phrases.help-block.customer.first_name.3')}}</li>

            </ul>
        </div>
    </div>
</div>

<div class="form-group farsi {{Form::groupIsInvalid('last_name')}}">
    {{Form::label('last_name', Lang::get('words.last_name'), array('class' => 'col-sm-3 control-label'))}}
    <div class="col-sm-5">
        {{Form::text('last_name', null, array('class' => 'form-control',
        "data-bind" => "value:personalDetails.last_name",
        'id' => 'last_name','placeholder'=> Lang::get('words.last_name')))}}
        <div class="help-block">
            {{Form::error('last_name')}}
            <ul>
                <li>{{Lang::get('phrases.help-block.customer.last_name.1')}}</li>
                <li>{{Lang::get('phrases.help-block.customer.last_name.2')}}</li>
                <li>{{Lang::get('phrases.help-block.customer.last_name.3')}}</li>
                <li>{{Lang::get('phrases.help-block.customer.last_name.4')}}</li>

            </ul>
        </div>
    </div>
</div>

<div class="form-group farsi {{Form::groupIsInvalid('fathers_name')}} ">
    {{Form::label('fathers_name', Lang::get('words.fathers_name'), array('class' => 'col-sm-3 control-label'))}}
    <div class="col-sm-5">
        {{Form::text('fathers_name', null, array('class' => 'form-control ',
        "data-bind" => "value:personalDetails.fathers_name",
        'id' => 'fathers_name','placeholder'=>Lang::get('words.fathers_name')))}}
        <div class="help-block">
            {{Form::error('fathers_name')}}
            <ul>
                <li>{{Lang::get('phrases.help-block.customer.fathers_name.1')}}</li>
            </ul>
        </div>
    </div>
</div>


<div class="form-group farsi {{Form::groupIsInvalid('email_address')}} ">
    {{Form::label('email_address', Lang::get('words.email_address'), array('class' => 'col-sm-3 control-label'))}}
    <div class="col-sm-5">
        {{Form::text('email_address', null, array('class' => 'form-control ',
        "data-bind" => "value:personalDetails.email_address",
        'id' => 'email_address','placeholder'=>Lang::get('words.email_address')))}}
        <div class="help-block">
            {{Form::error('email_address')}}
        </div>
    </div>
</div>


<div class="form-group farsi {{Form::groupIsInvalid('national_id')}} ">
    {{Form::label('national_id', Lang::get('words.national_id'), array('class' => 'col-sm-3 control-label'))}}
    <div class="col-sm-5">
        {{Form::text('national_id', null, array('class' => 'form-control ltr',
        "data-bind" => "value:personalDetails.national_id",
        'id' => 'national_id','placeholder'=>Lang::get('words.national_id')))}}
        <div class="help-block">
            {{Form::error('national_id')}}
        </div>
    </div>
</div>

<div class="form-group farsi {{Form::groupIsInvalid('passport_number')}} ">
    {{Form::label('passport_number', Lang::get('words.passport_number'), array('class' => 'col-sm-3 control-label'))}}
    <div class="col-sm-5">
        {{Form::text('passport_number', null, array('class' => 'form-control ltr',
        "data-bind" => "value:personalDetails.passport_number",
        'id' => 'passport_number','placeholder'=> Lang::get('words.passport_number')))}}
        <div class="help-block">
            {{Form::error('passport_number')}}
        </div>
    </div>
</div>

<div class="form-group {{Form::groupIsInvalid('country_of_residence')}}">
    {{Form::label('country_of_residence_id', Lang::get('words.country_of_residence'), array('class' => 'col-sm-3
    control-label
    farsi'))}}
    <div class="col-sm-5">
        {{Form::select('country_of_residence_id',
        DB::table('countries')->lists('country_name','id'),'158', array('class' => 'form-control
        ltr', "data-bind" => "value:personalDetails.country_of_residence_id",
        'id' => 'country','placeholder'=>Lang::get('words.country_of_residence')))}}
        <div class="help-block">
            {{Form::error('country_of_residence')}}
        </div>
    </div>
</div>

<div class="form-group farsi {{Form::groupIsInvalid('remarks')}} ">
    {{Form::label('remarks', Lang::get('words.remarks'), array('class' => 'col-sm-3
    control-label'))}}
    <div class="col-sm-5">
        {{Form::textarea('remarks', null, array('class' => 'form-control  farsi','id' =>
        'remarks', 'data-bind' => "value:personalDetails.remarks" ,'rows' => 3,
        'placeholder'=> Lang::get('words.remarks')))}}
        <div class="help-block">
        </div>
    </div>
</div>

{{Form::textareaInputSet('business_description')}}

{{Form::selectInputSet('moneychanger',['farsi-content rtl'],MoneyChanger::get()->lists('name','id'))}}