<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Core\AuthenticatedController;  

class DashboardController extends AuthenticatedController 
{
    protected $pageTitle = 'Dashboard';
    
    public function __construct()
    { 
        parent::__construct();   
    }
    
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {              
        return $this->view('dashboard.index');
    }

}