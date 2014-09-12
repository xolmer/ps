<?php
/** EloquentMailRepository
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/29/14 11:15 PM
 */

namespace SaarangSlt\Repositories\MailRepository;

use SaarangSlt\Repositories\BaseRepositoryInterface;

interface MailRepositoryInterface extends BaseRepositoryInterface{

    public function storeNewMail($senderID, $subject, $body,$priority, array $receivers);

    public function deleteMail($userID, $mailID);

    public function markAsRead($userID,$mailID);

    public function markAsStarred($userID,$mailID);

    public function addAttachment($userID,$uniqueID,$attachment);
    



} 