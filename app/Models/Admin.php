<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $permissions = null;

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
