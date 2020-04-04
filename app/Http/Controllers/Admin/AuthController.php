<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use App\Admin\Auth;
class AuthController extends Controller
{
    //list
    public function index(){
        return view('admin.auth.index');
    }
    //add
    public function add(){
        //judge request type
        if(Input::method() == 'POST'){
            //process data
            //add data to database
            $data = Input::except('_token');
            $result = Auth::insert($data);
            //laravel doesn't support return boolean value so transform boolean to integer
            return $result? '1':'0';
        }else{
            return view('admin.auth.add');
        }
    }
}
