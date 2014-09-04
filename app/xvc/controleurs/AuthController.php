<?php
/**
 * AuthController.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 2:40 PM
 */

class AuthController extends BaseController{


    public function index(){
        return Auth::check() ?  View::make( 'accueil' ) :  View::make('login');
    }

    public function authenticate()
    {
        $creds = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        if(Auth::validate($creds)){
            $errorMessage = '';

            $user = User::where('username',Input::get('username'))->get()->first();
            $user->is_active ?: $errorMessage = 'حساب کاربری شما فعال نمی باشد.' ;


            if(!empty($errorMessage)){
                return Redirect::back()->with('loginError',$errorMessage)->withInput() ;
            }

            Auth::loginUsingId($user->getKey());
            Event::fire('user.logged_in',$user);
            return Redirect::route('index');
        }
        $errorMessage = 'اطلاعات کاربری صیحیح نمی باشد. لطفا مجددا نام کاربری و کلمه عبور را وارد نمایید.';
        return Redirect::route('index')->with('loginError',$errorMessage)->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('index');
    }





}