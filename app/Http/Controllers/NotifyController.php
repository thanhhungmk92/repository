<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Patern\Notify;
use App\Patern\SmsAdapter;

class NotifyController extends Controller 
{
	protected $notify,$smsadapter;

	 public function __construct(Notify $notify, SmsAdapter $smsadapter)
    {
        $this->notify = $notify;
        $this->smsadapter = $smsadapter;
    }

	public function getThongBao()
	{
		$subject = 'Phan';
		$template = 'Thanh'; 
		$data = 'Hung';
		$smsSubject = 'Tôi đang';
		$smsTemplate = 'gửi'; 
		$smsData = 'thông báo cho bạn đó';
		echo $this->notify->send($subject,$template,$data);
		echo "<br>";
		echo $this->smsadapter->send($smsSubject,$smsTemplate,$smsData);
	}
}