<?php
namespace App\Patern;
interface Notify
{
    public function send($subject, $template, $data);
}