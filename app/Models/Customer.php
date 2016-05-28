<?php

namespace App\Models;

use App\Models\CustomerShippingAddress;
use App\Models\CustomerBillingAddress;

use Illuminate\Database\Eloquent\Model;
use DB;
class Customer extends Model
{
    protected $table = 'customers';

    /**
     * get customer's full name
     *
     * @return string
     */
    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function genderName()
    {
        return $this->gender == GENDER_MALE ? 'Male' : 'Female';
    }
}
