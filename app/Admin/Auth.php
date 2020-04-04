<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    //define related table
    protected $table = 'auth';
    //banned time
    public $timestamps = false;
}
