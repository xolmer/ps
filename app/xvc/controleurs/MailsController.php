<?php
/**
 * MailsController.php.
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/29/14 11:15 PM
 */

use SaarangSlt\Repositories\MailRepository\MailRepositoryInterface;
use SaarangSlt\Repositories\UserRepository\UserRepositoryInterface;
class MailsController extends \BaseController {


    /**
     * @var MailRepositoryInterface
     */

    private $mail;
    private $user;

    public function __construct(MailRepositoryInterface $mail, UserRepositoryInterface $user){

        $this->mail = $mailRepository;
        $this->user = $userRepositroy;
    }



}