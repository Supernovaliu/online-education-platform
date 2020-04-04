<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //login page
    public function login(){
        //view
        return view('admin.public.login');
    }
    //validate data
    public function check(Request $request){
        //start automatically validating
        $this -> validate($request,[
           //validating rule  name for validating => ''
           //can't be empty, length between 2-20
           'username'  => 'required|min:2|max:20',
           //can't be empty, no less than 6
           'password'  => 'required|min:6'
        ]);
       //check authentication
       $data = $request -> only(['username','password']);
       $data['status'] = '2';
       $result = Auth::guard('admin') -> attempt($data,$request -> get('online'));
       if($result){
                //go to home page of backend
                return redirect('/admin/index/index');


      }else{
                return redirect('/admin/public/login') -> witherrors([
                   'loginError'  => 'Account or Password is wrong'
           ]);

      }

    }
    //logout
    public function logout(){
        //logout
        Auth::guard('admin') -> logout();
        //go to the login page
        return redirect ('/admin/public/login');
    }
}
