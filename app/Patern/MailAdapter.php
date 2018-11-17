<?php
namespace App\Patern;
interface MailAdapter
{
     public function send($subject, $template, $data);
}
