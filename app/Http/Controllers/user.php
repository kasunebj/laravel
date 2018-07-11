<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
public function index(){
    $username = 'eranga';
    return view('user',['username'=>$username]);//return view('user',compact('username'));
                                                //return view('user')->with('username',$username);
}
}
