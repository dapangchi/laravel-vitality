<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Core\FrontController;
use URL;

class AuthenticatedController extends FrontController 
{
    protected $menu = '';
    protected $page = 'dashboard';
    
    public function __construct()
    {
        parent::__construct();   
        
        if(!$this->auth->isLoggedIn())
        {
            force_redirect(URL::previous());    
        }
        
        $this->data['menu'] = $this->menu;
        $this->data['page'] = $this->page;
    }
}