<?php
namespace App\Patern;
use App\Patern\Notify;

class MailAndSms implements Notify
{
    protected $mailer;
    protected $sms;

    public function __construct(MailAdapter $mailer,SmsAdapter $sms)
    {
        $this->mailer = $mailer;
        $this->sms = $sms;
    }

    public function send($subject, $template, $data)
    {
        return $this->mailer->send($subject, $template, $data);
        return $this->sms->send($subject, $template, $data);
    }
}