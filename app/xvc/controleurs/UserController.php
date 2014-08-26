<?php
/**
 * UserController.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 4:15 PM
 */
use SaarangSlt\Repositories\UserRepository\UserRepositoryInterface;

class UserController extends \BaseController
{

    public function  __construct(UserRepositoryInterface $userRepository)
    {
        $this->user = $userRepository;
    }


    public function showProfile()
    {

        $currentUser = $this->user->currentUser();
        return View::make('profile.profile')
            ->with(array('currentUser' => $currentUser));

    }


    public function updateAvatar()
    {
        $avatarFile = Input::file('avatar');
        $user = $this->user->currentUser();

        $this->user->storeAvatar($user->id, $avatarFile);
        Flash::success(Lang::get('messages.user.avatar-update-success'));
        return Redirect::back();

    }


    public function removeAvatar()
    {
        $user = $this->user->currentUser();
        if ($user->has_avatar) {
            Flash::success(Lang::get('messages.user.avatar-delete-success'));
            $this->user->removeAvatar($user->id);
        }
    }

    public function updateCurrentUserPassword(){
        try {
            $attributes = Input::all();
            $this->user->updateCurrentUsersPassword(Auth::user(), $attributes);
            Flash::success(Lang::get('messages.user.password-update-success'));
            return Redirect::back();
        }catch (Laracasts\Validation\FormValidationException $exception){
            return Redirect::back()->withInput()->withErrors( $exception->getErrors() )
                ->with('activeTab','changePassword');
        }


    }

}
