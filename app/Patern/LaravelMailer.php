<?php
namespace App\Patern;
use App\Patern\MailAdapter;
class LaravelMailer implements MailAdapter
{
	

	public function send($subject, $template, $data)
	{
		return $subject.$template.$data;
	}
}
