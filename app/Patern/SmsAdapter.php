<?php
namespace App\Patern;
interface SmsAdapter
{
     public function send($subject, $template, $data);
}