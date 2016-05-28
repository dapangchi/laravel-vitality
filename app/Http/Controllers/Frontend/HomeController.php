<?php

namespace App\Http\Controllers\Frontend;
                              
use App\Http\Controllers\Core\FrontController;

class HomeController extends FrontController {

    public function index()
    {
        //$this->pageTitle = 'Home';
        return $this->view('home.index');
    }
}