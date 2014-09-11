<?php
/**
 * EloquentMailRepository.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/29/14 11:15 PM
 */

namespace SaarangSlt\Repositories\MailRepository;


class EloquentMailRepository implements MailRepositoryInterface {

   
    
   

    function all()
    {
        // TODO: Implement all() method.
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
    }
    function storeNewMail($senderID, $subject, $body, array $receivers)
    {
        $newMail = \MailMessage::create(array(
            'sender_id' => $senderID,
            'subject' => $subject,
            'body' => $body
        ));
        
        $receiversArray = [];
        foreach($receivers as $index => $receiverID ){
            $receiversArray[$index] = new \UserMail(['receiver_id' => $receiverID]);
        }
        $newMail->receivers()->saveMany($receiversArray);

    

    }

    public function addRecipientToMail($mailID,$recipientID){
            \UserMail::create(array(
                'receiver_id' => $recipientID,
                'mail_id' => $mailID
            ));
    }



    function deleteMail($userID, $mailID)
    {

    }


    function markAsRead($userID,$mailID)
    {

    }


    function markAsStarred($userID,$mailID)
    {

    }


    function addAttachment($userID,$uniqueID,$attachment)
    {

    }
}