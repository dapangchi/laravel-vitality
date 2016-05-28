<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Core\BasicController;
use App\Libraries\Template;
use AdminAuth, Session, Request, Input, URL;

class AdminController extends BasicController 
{
    protected $menu = '';
    protected $page = 'dashboard';
    
    protected $currentUser = null;
    protected $controllerUri = 'admin';
    
    protected $listRoute = '';
    protected $listLimit = 25;
     
    public function __construct()
    {
        parent::__construct();   
        
        // If user is logged in, then get customer
        $this->auth = new AdminAuth();
        $this->auth->restrict();
        
        $this->currentUser = $this->auth->user();
        $this->data['currentUser'] = $this->currentUser;
        
        $this->data['menu'] = $this->menu;
        $this->data['page'] = $this->page;
        $this->data['listRoute'] = $this->listRoute;
    }
      
    protected function view($view, $data = array())
    {              
        return parent::view("admin.{$view}", $data);
    } 
    
    protected function saveSorting()
    {
        if(!Request::has('order')) return;
        
        $order      = Request::input('order');
        $orderby    = Request::input('orderby') == 'asc'? 'asc': 'desc';
        
        $data = ['order' => $order, 'orderby' => $orderby];
        
        Session::set($this->listRoute, $data);
        Session::save();
    }
    
    protected function listUrl()
    {
        return my_route($this->listRoute);
    }   
    
    protected function uploadImage($file, $path='') {
        
        if($path != '')
        {
            $path = '/' . $path . '/';
        }
        
        if(Input::hasFile($file))
        {     
            $file = Input::file($file); 
            
            $fileName = strtolower($file->getClientOriginalName());
            $targetUri = UPLOADS_BASE . $path . substr($fileName, 0, 1) . '/' . substr($fileName, 1, 1);
            $targetPath = public_path($targetUri);
            
            if(!mkpath($targetPath))
            {
                return redirect()
                    ->back()
                    ->withInput();    
            }
            $file->move($targetPath, $fileName);
            
            return $targetUri . '/' . $fileName;  
        }          
        
        return '';
    } 
    
    protected function restrict($permission='')
    {
        if($permission == '') return;
        
        if(!$this->currentUser->has_permission($permission))
        {
            Template::set_message('Sorry, You don\'t have permission to access that page.', 'danger');
            
            //force_redirect(route('admin.dashboard'));
            force_redirect(URL::previous());
        }
    }
    
    protected function restrict_any($permissions=array())
    {
        foreach($permissions as $permission)
        {
            if($this->currentUser->has_permission($permission)) return;    
        }
        
        Template::set_message('Sorry, You don\'t have permission to access that page.', 'danger');
        force_redirect(URL::previous());
    }
}