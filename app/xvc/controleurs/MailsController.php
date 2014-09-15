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

class MailsController extends \BaseController
{


    private $mail;
    private $user;

    public function __construct(MailRepositoryInterface $mailRepository, UserRepositoryInterface $userRepositroy)
    {

        $this->mail = $mailRepository;
        $this->user = $userRepositroy;
    }

    public function showInbox()
    {
        $mailMessages = $this->mail->getUserReceivedMails(Auth::user()->id);
        return View::make('mails.inbox')->with('mails', $mailMessages);
    }

    public function showSentbox()
    {
        $mails = $this->mail->getUserSentMails($this->user->currentUser()->id);
        return View::make('mails.sentbox')->with('mails',$mails);
    }

    public function showCompose()
    {
        return View::make('mails.compose');
    }

    public function postCompose()
    {
        extract(Input::all());

        $this->mail->storeNewMail($this->user->currentUser()->id, $subject, $body, $priority, $recipients);

        Flash::success(Lang::get('messages.mails.send-mail-success'));
        return Redirect::route('mail.inbox');
    }

    public function showTrash()
    {
        $mails =  $this->mail->getUserDeletedMails($this->user->currentUser()->id);
        return View::make('mails.trashbox')->with('mails',$mails);
    }

    public function toggleStar()
    {
        $userID = $this->user->currentUser()->id;
        $this->mail->toggleStar($userID,Input::get('id'), Input::get('stared'));
    }

    public function markAsRead()
    {
        $this->mail->markAsRead(Input::get('id'));

    }

    public function deleteMail(){
        $selectedMails = Input::get('mails');
        foreach($selectedMails as $mailID)
        $this->mail->deleteMail($this->user->currentUser()->id,$mailID);
    }

    public function handleAttachment()
    {
        // Simple validation (max file size 2MB and only two allowed mime types)
        $validator = new \FileUpload\Validator\Simple(1024 * 1024 * 2, ['image/png', 'image/jpg']);

        // Simple path resolver, where uploads will be put
        $pathresolver = new \FileUpload\PathResolver\Simple(mail_attachments_path());

        // The machine's filesystem
        $filesystem = new \FileUpload\FileSystem\Simple();

        // FileUploader itself
        $fileupload = new \FileUpload\FileUpload($_FILES['files'], $_SERVER);

        // Adding it all together. Note that you can use multiple validators or none at all
        $fileupload->setPathResolver($pathresolver);
        $fileupload->setFileSystem($filesystem);
        $fileupload->addValidator($validator);

        // Doing the deed
        list($files, $headers) = $fileupload->processAll();

        // Outputting it, for example like this
        foreach ($headers as $header => $value) {
            header($header . ': ' . $value);
        }

        echo json_encode(array('files' => $files));
    }


}