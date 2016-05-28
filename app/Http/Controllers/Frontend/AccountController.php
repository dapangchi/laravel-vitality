<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Core\AuthenticatedController;
use App\Libraries\Template;
use App\Models\Customer;
use Input, Validator;

class AccountController extends AuthenticatedController {
    protected $pageTitle = 'Profile';
    
    public function __construct()
    {
        parent::__construct();
        
        //$this->data['menu'] = 'setting';
        $this->data['page'] = 'profile';
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function profile()
    {
        $this->pageHeaderTitle = $this->currentCustomer->fullName();
        return $this->view('account.profile');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    //////////////////////////////////////////////////////////////// 
    
    /**
    * update summary
    * 
    */
    public function updateSummary()
    {
        //validate posts
        $rules = [
            //'summary' => "required", 
        ];      
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $this->currentCustomer->summary = Input::get('summary');
        $this->currentCustomer->save();
        
        Template::set_message('Your summary is updated.', 'success');
        
        return redirect(route('account.profile'));
    }
    
    /**
    * update basic information
    * 
    */
    public function updateBasic()
    {
        //validate posts
        $rules = [
            'first-name'=> "required", 
            'last-name' => "required", 
            'gender'    => "required", 
            'birthday'  => "required", 
        ];      
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $this->currentCustomer->first_name  = Input::get('first-name');
        $this->currentCustomer->last_name   = Input::get('last-name');
        $this->currentCustomer->gender      = Input::get('gender');
        $this->currentCustomer->birthday    = date('Y-m-d', strtotime(Input::get('birthday')));
        $this->currentCustomer->save();
        
        Template::set_message('Your basic information is updated.', 'success');
        
        return redirect(route('account.profile'));
    }
    
    /**
    * update contact information
    * 
    */
    public function updateContact()
    {
        $user = $this->currentCustomer;
        
        //validate posts
        $rules = [
            'phone' => "required", 
            'email' => "required|email|unique:customers,email,$user->id,id", 
            'facebook-name' => "required", 
            'twitter-name'  => "required", 
            'address'       => "required", 
        ];      
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $this->currentCustomer->email   = Input::get('email');
        $this->currentCustomer->phone   = Input::get('phone');
        $this->currentCustomer->address = Input::get('address');
        $this->currentCustomer->facebook_name= Input::get('facebook-name');
        $this->currentCustomer->twitter_name = Input::get('twitter-name');
        $this->currentCustomer->save();
        
        Template::set_message('Your contact information is updated.', 'success');
        
        return redirect(route('account.profile'));
    }
    
    /**
    * update password
    * 
    */
    public function updatePassword()
    {
        $user = $this->currentCustomer;
        
        //validate posts
        $rules = [
            'current-password'  => "required|checkCurrentPassword:customers,id,$user->id",
            'password'          => 'min:4',
            'password-confirm'  => 'same:password' 
        ];      
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $salt = str_random(8);
        $this->currentCustomer->passsalt = $salt;
        $this->currentCustomer->password = md5($salt . Input::get('password'));
        $this->currentCustomer->save();
        
        Template::set_message('Your password is updated.', 'success');
        
        $this->auth->logout();
            
        return redirect(route('auth.login'));
    }
}