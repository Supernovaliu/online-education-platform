<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
//cite trait
use Illuminate\Auth\Authenticatable;

class Manager extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //define connected table
    protected $table = 'manager';
    
    //use trait
    use Authenticatable;
}
