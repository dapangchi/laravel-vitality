<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use App\Models\CustomerPasswordReset;
use App\Models\SocialProfile;
use App\Models\LoginAttempt;
use Input, Validator, Redirect, URL, Mail, DB, Session;

class AuthController extends FrontController {
    protected $pageClass = '';
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function login()
    {
        if($this->auth->isLoggedIn())
        {
            return Redirect::route('dashboard');
        }
        
        $this->pageTitle = 'Login';
        return $this->view('auth.login');
    }
    
    public function register()
    {
        if($this->auth->isLoggedIn())
        {
            return Redirect::route('dashboard');
        }
        
        $this->pageTitle = 'Register';
        return $this->view('auth.register');
    }
    
    public function registerSuccess()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        if(!($email = Template::get_registered_email()))
        {
            return Redirect::route('auth.register');
        } 
        
        //login customer forcely
        //$this->auth->loginForce($email);
        //$auth = $this->auth;
        //$this->data['currentCustomer'] = $this->auth->customer();
        
        $this->pageTitle = 'Register';
        //return $this->view('auth.registerSuccess', compact('email', 'auth'));
        return $this->view('auth.registerSuccess', compact('email'));
    }
    
    public function logout()
    {
        $this->auth->logout();
        
        return redirect('/');;
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postLogin()
    {
        if($this->auth->isLoggedIn())
        {
            return Redirect::route('dashboard');
        }
        
        $waitTime = 0;
        $loginType = 'customer';
        //check ip is blocked
        if(LoginAttempt::isBlocked($loginType, $waitTime))
        {
            Template::set_message("Too many requests. Please try again after $waitTime mins.", 'danger');
            
            return Redirect::route('customer.login');
        }
        else
        {
            //increase login attempt
            LoginAttempt::increase($loginType); 
            
            //validate posts
            $rules = [
                'email' => 'required|email', 
                'password'   => 'required',
            ];
            
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) 
            {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            //check user row by email
            $email = Input::get('email');
            $pass  = Input::get('password'); 
            $remember = Input::get('remember') ? true : false;
            if(!$this->auth->login($email, $pass, $remember))
            {
                return Redirect::route('auth.login');
            }
            else
            {
                //remove attempt history
                LoginAttempt::clear($loginType);
            }
        }
        
        return Redirect::route('dashboard');
    }   
    
    public function postRegister()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        //validate posts
        $rules = [
            'email'     => 'required|email|unique:customers', 
            'password'  => 'required|min:4',
            'password-confirm' => 'required|same:password',
            'first-name'=> 'required|max:32',
            'last-name' => 'required|max:32',
            'gender'    => 'required',
            'birthday'  => 'required',
            'phone'     => 'required',
            'facebook-name' => 'required',
            'twitter-name'  => 'required',
            'address'       => 'required',
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            foreach($validator->errors()->all() as $error)
            {
                Template::set_message($error, 'danger');
            }

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        //check user row by email
        if(!$this->_registerCustomer())
        {
            Template::set_message(trans('auth.registeration_fail'), 'danger');
            return Redirect::route('auth.register');
        }   
        
        //save registered email to session
        Template::save_registered_email(Input::get('email'));
         
        return Redirect::route('auth.register.success');        
    } 
    
    ////////////////////////////////////////////////////////////////
    // Private Functions
    ////////////////////////////////////////////////////////////////
    private function _registerCustomer()
    {
        $email      = Input::get('email');
        $firstName  = Input::get('first_name');
        $lastName   = Input::get('last_name');
        $password   = Input::get('password'); 
        
        
        $salt = str_random(8);
		$customer = new Customer;
        $customer->email    = Input::get('email');
        $customer->passsalt = str_random(8);;
        $customer->password = md5($customer->passsalt . Input::get('password'));
        $customer->first_name= Input::get('first-name');
		$customer->last_name = Input::get('last-name');
        $customer->gender    = Input::get('gender');
        $customer->birthday  = date('Y-m-d', strtotime(Input::get('birthday')));
        $customer->phone     = Input::get('phone');
        $customer->facebook_name = Input::get('facebook-name');
        $customer->twitter_name  = Input::get('twitter-name');
        $customer->facebook_name = Input::get('last-name');
        $customer->address       = Input::get('address');
        $customer->is_active = STATUS_ACTIVE;
        $customer->save();

        // Send register email to customer
        $this->sendMail('emails.register', $email, $customer->fullName(), array('customer' => $customer), 'Thanks for your registering!');
        
        return isset($customer->id) ? true : false;
    }
    
    ////////////////////////////////////////////////////////////////
    // Ajax Functions
    ////////////////////////////////////////////////////////////////   
    public function ajaxCheckEmail()
    {
        $email = Input::get('email');
        
        $user = Customer::where('email', $email)->first();
        if($user == null) return 'true';
        
        return 'false';        
    }   
}