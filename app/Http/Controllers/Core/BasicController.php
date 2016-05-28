<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Core\Controller;
use App\Models\Setting;
use Mail, Request;

class BasicController extends Controller 
{
    protected $data = array();
    protected $settings = array();
    protected $auth = null;
    
    protected $pageTitle = '';
    protected $pageClass = '';
    protected $pageMenu = '';
    protected $pageHeaderTitle = '';
    
    public function __construct()
    {      
         $this->settings = Setting::allBy();    

         $this->data['settings'] = $this->settings;
    }
    
    protected function view($view, $data = array())
    {
        $this->data['pageTitle'] = $this->pageTitle;
        $this->data['pageClass'] = $this->pageClass;
        $this->data['pageMenu'] = $this->pageMenu;
        $this->data['pageHeaderTitle'] = $this->pageHeaderTitle != '' ? $this->pageHeaderTitle : $this->pageTitle;
        
        return view($view, $data, $this->data);
    }   
    
    protected function sendMail($mailTemplate, $receiverMail, $receiverName='', $data=array(), $subject='Site Notification')
    {
        $this->toEmail = $receiverMail;
        $this->toName = $receiverName;
        $this->mailSubject = $subject;
        
        $data['receiverName'] = $receiverName;
        Mail::send($mailTemplate, $data, function($message) 
        {
            $message->from($this->settings['email.sender_email'], $this->settings['email.sender_name'])
                ->to($this->toEmail, $this->toName)
                ->subject($this->mailSubject);
        });
    }
}