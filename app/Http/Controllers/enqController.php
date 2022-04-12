<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class enqController extends Controller
{
    //
    public function index(){
      return view('pack_insert');
    }

    public function pack_insert(){
      return view('take_input');
    }
     public function inset_enq(Request $request)
    {





      $Userid = $request->input('t1');
      $Packid = $request->input('t2');
      $Name = $request->input('t3');
      $Mobileno = $request->input('t4');
      $Email = $request->input('t5');
      $days = $request->input('t6');
      $children = $request->input('t7');
      $adult = $request->input('t8');
      $message = $request->input('t9');

  if(isset($_POST["sbmt"])){
      $data=array('Userid'=>$Userid,"Packageid"=>$Packid,"Name"=>$Name,"Mobileno"=>$Mobileno,"Email"=>$Email,"NoofDays"=>$days,"Child"=>$children,"Adults"=>$adult,"Message"=>$message,"Statusfield"=>'pending');
      DB::table('enquiry')->insert($data);
      echo "Record inserted successfully.<br/>";
}
if(isset($_POST["sbmt_payment"])){
    $data=array('Userid'=>$Userid,"Packageid"=>$Packid,"Name"=>$Name,"Mobileno"=>$Mobileno,"Email"=>$Email,"NoofDays"=>$days,"Child"=>$children,"Adults"=>$adult,"Message"=>$message,"Statusfield"=>'Confirm');
    DB::table('enquiry')->insert($data);
    echo "Record inserted successfully.<br/>";
}

if(isset($_POST["sbmt_dis"])){

  $user=DB::select("SELECT Userid,Username,Typeofuser from users where (select count(Packageid)>=3 from enquiry where users.Userid=enquiry.Userid)");
  return view('show_user')->with(['users'=>$user]);
}



      }

      public function insert_pack(Request $request)
     {






       $Packname = $request->input('t1');
       $Subcategory = $request->input('t2');
       $Packprice = $request->input('t3');
       $Detail = $request->input('t4');


     if(isset($_POST["sbmt"])){
       $data=array('Packname'=>$Packname,"Subcategory"=>$Subcategory,"Packprice"=>$Packprice,"Detail"=>$Detail );
       DB::table('package')->insert($data);
       echo "Record inserted successfully.<br/>";
     }


       }


       public function enq_insert(Request $request)
      {


        $message = $request->input('message');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $country = $request->input('country');



    if(isset($_POST["submit"])){
        $data=array("Message"=>$message,'first_name'=>$firstname,"last_name"=>$lastname,"country"=>$country );
        DB::table('contactus')->insert($data);
        echo "Record inserted successfully.<br/>";
      }


        }

      }
