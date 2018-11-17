<?php
namespace App\Patern;
use App\Patern\Notify;
class EmailOnly implements Notify
{
    protected $mailer;

    public function __construct(MailAdapter $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send($subject, $template, $data)
    {
        return $this->mailer->send($subject, $template, $data);
    }
}