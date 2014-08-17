<?php namespace SaarangSlt\Notifications;

use Illuminate\Session\Store;

class FlashNotifier{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function message($message,$level = 'info'){
        $this->session->flash('flash_notification.message',$message);
        $this->session->flash('flash_notification.level',$level);
    }

    public function success($message)
    {
        $this->message($message,'success');
    }

    public function error($message)
    {
        $this->message($message,'danger');
    }

    public function info($message){
        $this->message($message,'info');
    }

    public function warning($message){
        $this->message($message,'warning');
    }

    public function overlay($message,$title='Notice')
    {
        $this->message($message);
        $this->session->flash('flash_notification.overlay',true);
        $this->session->flash('flash_notification.overlayTitle',$title);


    }

}