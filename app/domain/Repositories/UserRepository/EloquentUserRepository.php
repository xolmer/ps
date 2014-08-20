<?php namespace SaarangSlt\Repositories\UserRepository;

/**
 * UserRepository.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 5:15 PM
 */


use SaarangSlt\Validators\UserValidator;
use Illuminate\Hashing\BcryptHasher;

class EloquentUserRepository implements UserRepositoryInterface
{

    protected $userValidator;
    protected $hasher;


    public function __construct( UserValidator $userValidator, BcryptHasher $hasher )
    {
        $this->userValidator = $userValidator;
        $this->hasher        = $hasher;
    }

    public function all()
    {
        return \User::all();
    }


    public function findById( $userID )
    {
        return \User::findOrFail( $userID );
    }


    public function createNewUser( $attributes )
    {
        $this->userValidator->validate( $attributes );

        $user = new \User();
        $user->fill( array_except( $attributes, 'password_confirmation' ) );
        $user->password = $this->hasher->make( $attributes['password'] );
        $user->save();

        return $user;
    }

    public function updateUser( $userID, $attributes )
    {
        //nous allons valider le mot de passe que si elle existe
        if ( empty( $attributes['password'] ) ) {
            array_forget( $attributes, 'password' );
        }
        $this->userValidator->validateUpdate( $attributes );
        array_forget( $attributes, 'password_confirmation' );

        $user = \User::findOrFail( $userID );

        $user->fill( $attributes );
        if ( array_key_exists( 'password', $attributes ) ) {
            $user->password = $this->hasher->make( $attributes['password'] );
        }
        $user->is_active = array_key_exists( 'is_active', $attributes );
        $user->save();

        return $user;

    }

    public function currentUser()
    {
        return \Auth::user();
    }

} 