<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
   public function index(){
     return view('loginForm');
   }

   public function check(Request $request){
     if(isset($_POST["sbmt"]))
     {

   $name = $request->input('t1');
   $pass = $request->input('t2');

   $user=DB::selectOne("select Username and Pwd from users where Username='$name' and Pwd='$pass'");

   if($user===null){
     echo "wrong username or password";
   }
   else{
    if($name =='admin' and $pass =='admin'){
        return view('admin_page');
     }
    else{
       return view('index');
     }
   }

 }
else{
  echo "enter submit";

}

}}
