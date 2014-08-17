<?php
/**
 * UserRepositoryInterface.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 5:14 PM
 */

namespace SaarangSlt\Repositories\UserRepository;

use \SaarangSlt\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
interface UserRepositoryInterface extends  BaseRepositoryInterface{

    public function createNewUser($attributes);

    public function updateUser($userID,$attributes);


} 