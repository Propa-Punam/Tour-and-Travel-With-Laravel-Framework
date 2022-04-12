<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class RegInsertController extends Controller
{



public function insert(Request $request){
  if(isset($_POST["sbmt"]))
  {

$name = $request->input('t1');
$pass = $request->input('t2');
$rpass=$request->input('t3');
if($rpass==$pass){
$data=array('Username'=>$name,"Pwd"=>$pass,"Typeofuser"=>'General');
DB::table('users')->insert($data);
echo "Record inserted successfully.<br/>";
}
else{
  echo "do not match password";
}
}
else{
  echo "Insert data first..";
}
}
}
