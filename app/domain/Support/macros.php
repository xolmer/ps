<?php

Form::macro( 'error', function ( $input_name ) {
    if ( !Session::has( 'errors' ) ) {
        return;
    }
    $errors = Session::get( 'errors' );
    $output = '<ul class="form-errors">';
    foreach ($errors->get( $input_name ) as $error) {
        $output .= "<li>$error</li>";
    }
    $output .= "</ul >";

    return $output;
} );

Form::macro( 'groupIsInvalid', function ( $input_name ) {
    if ( Session::has( 'errors' ) ) {
        $errors = Session::get( 'errors' );

        return $errors->has( $input_name ) ? 'has-error' : '';
    }
} );


Form::macro( 'textInputSet', function ( $input_name, $classes = [], $attributes = null) {
    $classes = implode( ' ', $classes );

    return View::make( 'disposition.macros.textInputSet' )
    ->with( array(
        'name'    => $input_name,
        'classes' => $classes
        ) );
} );

Form::macro('selectInputSet',function ( $input_name , $classes = [] , $data = [] , $defaultValue = null, $attributes = null) {

    $classes = implode( ' ', $classes);

    return View::make('disposition.macros.selectInputSet')
    ->with(array(
        'name' => $input_name,
        'classes' => $classes,
        'defaultValue' => $defaultValue,
        'data' => $data

        ));

});

Form::macro('countrySelectSet',function ( $input_name , $classes = [] , $defaultValue = 158) {

    $classes = implode( ' ', $classes);
    $data = DB::table('countries')->lists('country_name','id');
    return View::make('disposition.macros.selectInputSet')
    ->with(array(
        'name' => $input_name,
        'classes' => $classes,
        'defaultValue' => $defaultValue,
        'data' => $data

        ));

});

Form::macro('timezoneSelectSet',function ( $input_name , $classes = [] , $defaultValue = 'Asia/Kuala_Lumpur') {

    $classes = implode( ' ', $classes);
    $data = DB::table('timezones')->lists('name','name');
    return View::make('disposition.macros.selectInputSet')
    ->with(array(
        'name' => $input_name,
        'classes' => $classes,
        'defaultValue' => $defaultValue,
        'data' => $data

        ));

});

Form::macro('imageUploadSet',function ( $input_name , $label,  $classes = [] ) {

    $classes = implode( ' ', $classes);

    return View::make('disposition.macros.imageUploadSet')
        ->with(array(
            'name' => $input_name,
            'classes' => $classes,
            'label' => $label
        ));

});

Form::macro( 'passwordInputSet', function ( $input_name, $classes = [], $attributes = null) {
    $classes = implode( ' ', $classes );

    return View::make( 'disposition.macros.passwordInputSet' )
        ->with( array(
            'name'    => $input_name,
            'classes' => $classes
        ) );
} );

HTML::macro('dateblock', function($date){

    $date = ($date) ?: \Carbon\Carbon::now();
    $originalDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$date,'UTC');

    $userTimezone = Auth::user()->timezone ;
    $alternateTimezone = ($userTimezone == 'Asia/Kuala_Lumpur') ? 'Asia/Tehran' : 'Asia/Kuala_Lumpur' ;

    //Date in user timezone
    $originalDate->timezone = new DateTimeZone(Auth::user()->timezone);
    $dateInUserTimezone = $originalDate->format(DEFAULTDATEFORMAT);
    $dateInUserTimezoneFa = toJalali(strtotime($originalDate->format(MYSQLFORMAT)));
    $userDateTitle = Lang::get('words.time_of') . ' ' . timezoneToCountry($userTimezone);
    $alternateDateTitle = Lang::get('words.time_of') . ' ' . timezoneToCountry($alternateTimezone);

    //Date in alternate timezone
    $originalDate->timezone = new DateTimeZone($alternateTimezone);
    $dateInAlternateTimezone = $originalDate->format(DEFAULTDATEFORMAT);
    $dateInAlternateTimezoneFa = toJalali(strtotime($originalDate->format(MYSQLFORMAT)));

    return View::make('partiels.date_block')->with(compact('dateInUserTimezone',
        'dateInAlternateTimezone',
        'dateInUserTimezoneFa',
        'dateInAlternateTimezoneFa',
        'userDateTitle',
        'alternateDateTitle'
        ));
});

