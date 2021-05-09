<?php

namespace App\Controllers;

use App\Models\BlogModel;

class API extends BaseController
{
	public function index()
	{
		
	}
    public function requestMembership(){
        $email = \Config\Services::email();
        $config['SMTPHost'] = 'mail.sit.acm.org';
        $config['SMTPUser'] = 'admin@sit.acm.org';
        $config['SMTPPass']  = 'W5iR%oHyR7R!mKgXY7*';
        $config['SMTPPort'] = 2525;
        $email->initialize($config);
        $email->setFrom('admin@sit.acm.org');
        $email->setTo('vipulrpatil.8@gmail.com, developer.vipulpatil@gmail.com');
        $email->setSubject('ACM Membership Request');
        $email->setMessage('Test wants to join acm');
        if ($email->send(false))
{
    return json_encode(["success"=>"true"]);
}else{
  
    return $email->printDebugger();
}

       
    }
}
