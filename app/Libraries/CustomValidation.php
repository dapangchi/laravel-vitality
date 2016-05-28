<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CustomValidation
{    
    public function checkCurrentPassword($field, $value, $parameters)
    {
        if(count($parameters) < 3) return false;
        
        $table = $parameters[0];
        $table_field = $parameters[1];
        $table_value = $parameters[2];
        
        // Get Row
        $row = DB::table($table)
            ->where($table_field, $table_value)
            ->first();
        if($row == null) return false;
        
        // Check Pasword
        if($row->password != md5($row->passsalt . $value))
        {  
            return false;
        }
        
        return true;
    }
}