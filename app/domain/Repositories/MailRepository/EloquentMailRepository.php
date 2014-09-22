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
        return \MailMessage::find($id);
    }

    public function getSender($sender_id)
    {
        return \User::findOrFail($sender_id);
    }

    function storeNewMail($senderID, $subject, $body,$priority, array $receivers)
    {
        $newMail = \MailMessage::create(array(
            'sender_id' => $senderID,
            'subject' => $subject,
            'priority' => $priority,
            'body' => $body
        ));
        $newMail->save();
        $receiversArray = [];
        foreach($receivers as $index => $receiverID ){
            $receiversArray[$index] = new \UserMail(['receiver_id' => $receiverID]);
        }
        $newMail->receivers()->saveMany($receiversArray);

    

    }





    function deleteMail($userID, $mailID)
    {
        \UserMail::where('receiver_id',$userID)->where('id',$mailID)->delete();
    }


    function markAsRead($mailID)
    {
         \UserMail::where('id',$mailID)->update(['is_read' => true]);
    }


    function toggleStar($userID,$mailID,$isStared)
    {

         \UserMail::where('id',$mailID)->where('receiver_id',$userID)->update(['is_stared' => $isStared === 'true'? true: false]);

    }


    function addAttachment($userID,$uniqueID,$attachment)
    {

    }

    public function getUserReceivedMails($userID)
    {
        return \UserMail::where('receiver_id',$userID)->get();
    }

    public function getUserSentMails($userID)
    {
        return \UserMail::whereHas('mail', function($q) use($userID)
        {
            $q->where('sender_id', $userID);

        })->get();
    }

    public function getUserDeletedMails($userID)
    {
        return \UserMail::onlyTrashed()->where('receiver_id',$userID)->get();
    }

    public function getUserUnreadCount($userID)
    {
        // TODO: Implement getUserUnreadCount() method.
    }
}