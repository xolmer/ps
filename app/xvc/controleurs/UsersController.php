<?php
/**
 * UsersController.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 4:15 PM
 */
use SaarangSlt\Repositories\UserRepository\UserRepositoryInterface;

class UsersController extends \BaseController
{

    public function  __construct( UserRepositoryInterface $userRepository )
    {
        $this->user = $userRepository;
    }

    public function index()
    {
        $users = $this->user->all();

        return View::make( 'users.usersIndex' )->with( 'users', $users );
    }


    public function create()
    {
        return View::make( 'users.createUser' );
    }

    public function store()
    {

        $user = $this->user->createNewUser( Input::all() );

        Flash::success( Lang::get( 'messages.user.create-success', array(
            'user'  => $user->full_name,
            'state' => $user->account_status
        ) ) );

        return Redirect::route( 'users.index' );
    }


    public function edit( $userID )
    {
        $user = $this->user->findById( $userID );

        return View::make( 'users.editUser' )->with( 'user', $user );
    }

    public function update( $userID )
    {
        $user = $this->user->updateUser( $userID, Input::all() );

        Flash::success( Lang::get( 'messages.user.update-success' , array(
            'user'  => $user->full_name,
         ) ));

        return Redirect::route('users.index');
    }
} 