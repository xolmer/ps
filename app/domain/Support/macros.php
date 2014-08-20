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