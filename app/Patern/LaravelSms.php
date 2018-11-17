<?php
namespace App\Patern;
use App\Patern\SmsAdapter;
class LaravelSms implements SmsAdapter
{

	public function send($subject, $template, $data)
	{
		return $subject." ".$template." ".$data;
	}
}
