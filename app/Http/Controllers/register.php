<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class register extends Controller
{
    //
    public function index(){
        return view('register');
    }

public function storedata(Request $request){
    user::create($request ->all());
    return "succesfully registered";

}
}
