<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //home page
    public function index(){
        return view('admin.index.index');
    }
    //home page-framework page
    public function welcome(){
        return view('admin.index.welcome');
    }
}  
