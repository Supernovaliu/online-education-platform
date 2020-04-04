<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//cite model
use App\Admin\Manager;

class ManagerController extends Controller
{
    //administrator list operation
    public function index(){
        //query data
        $data = Manager::get();
        //show view
        return view('admin.manager.index',compact('data'));
    }
}
