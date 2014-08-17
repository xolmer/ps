<?php
/**
 * UserEvents.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 2:56 PM
 */

Event::listen('user.logged_in', function(User $user){

    $user->last_login = \Carbon\Carbon::now();
    $user->save();


});