<?php
namespace App\Patern;
use App\Patern\Notify;

class SmsAddOn implements Notify
{
    protected $sms;
    protected $notifier

    public function __construct(Notify $notifier,SmsAdapter $sms)
    {
        $this->notifier = $notifier;
        $this->sms = $sms;
    }

    public function send($subject, $template, $data)
    {
        return $this->notifier->send($subject, $template, $data);
        return $this->sms->send($subject, $template, $data);
    }
}