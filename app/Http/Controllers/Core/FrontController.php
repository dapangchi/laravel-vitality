<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Core\BasicController;
use CustomerAuth, Session, Request;  

class FrontController extends BasicController 
{
    protected $currentCustomer = null;
    
    public function __construct()
    {
        parent::__construct();    
        
        // If customer is logged in, then get customer
        $this->auth = new CustomerAuth();
        if($this->auth->isLoggedIn())
        {
            $this->currentCustomer = $this->auth->customer();
            $this->data['currentCustomer'] = $this->currentCustomer;
        }
    }
    
    protected function view($view, $data = array())
    {    
        return parent::view("frontend.{$view}", $data);
    }
}