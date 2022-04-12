<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function update(){
     return view('admin_update');

    }
    public function delete(){
     return view('admin_delete');

    }

    public function deleteTable(Request $request){
      $tablename = $request->input('tablename');
      DB::statement("drop table $tablename");
      echo "successfully done";
    }

    public function addCol(Request $request){
      if(isset($_POST["sbmt"]))
      {

    $tablename = $request->input('tablename');
    $colname=$request->input('colname');
    $coltype=	$request->input('coltype');
    $collen=$request->input('collen');

  DB::statement("ALTER TABLE $tablename ADD $colname $coltype($collen)");

	echo "Record Update";

    }
}
public function removeCol(Request $request){
  if(isset($_POST["sbmt"]))
  {

$tablename = $request->input('tablename');
$colname=$request->input('colname');


DB::statement("ALTER TABLE $tablename drop column $colname");

echo "successfully";

}
}


public function ChangeCol(Request $request){
  if(isset($_POST["sbmt"]))
  {

$tablename = $request->input('tablename');
$colname=$request->input('colname');
$coltype=	$request->input('coltype');
$collen=$request->input('collen');



DB::statement("ALTER TABLE $tablename MODIFY $colname	$coltype($collen)");

echo "Record Update";

}
}
public function renameCol(Request $request){
  if(isset($_POST["sbmt"]))
  {

$tablename = $request->input('tablename');
$ocolname=$request->input('ocolname');
$ncolname=$request->input('ncolname');
$coltype=	$request->input('coltype');
$collen=$request->input('collen');
DB::statement("ALTER TABLE $tablename CHANGE COLUMN $ocolname $ncolname $coltype($collen)");

echo "successfully";

}
}

public function updateId(Request $request){
  if(isset($_POST["sbmt"]))
  {

$tablename = $request->input('tablename');
$id=$request->input('id');
$colname=$request->input('colname');
$pname=$request->input('pname');
if(!empty($_POST["nvalue"])){
$value=	$request->input('nvalue');}
else if(!empty($_POST["tvalue"])){
$value=	$request->input('tvalue');}
else {
 echo "enter value";
}
if(!empty($_POST["nvalue"])){
DB::update("UPDATE $tablename SET $colname=$value where $pname=$id");}
else if(!empty($_POST["tvalue"])){
DB::update("UPDATE $tablename SET $colname='$value' where $pname=$id");
}

echo "successfully";

}
}

public function  deleteid(Request $request){
  if(isset($_POST["sbmt"]))
  {

$tablename = $request->input('tablename');
$id=$request->input('id');
$pname=$request->input('pname');
DB::delete("DELETE FROM $tablename WHERE $pname=$id ");

echo "successfully";

}
}

public function  view(Request $request){
  return view('admin_view');
}
public function  packUser(){
  return view('admin_view');
}
public function  viewTable(Request $request){
  if(isset($_POST["sbmt"]))
  {

$user=DB::select("SELECT * FROM users");
return view('show_user')->with(['users'=>$user]);


}
if(isset($_POST["union"]))
{

$user=DB::select("select Catid FROM subcategory union SELECT Cat_id as Catid from category");
return view('show_catid')->with(['users'=>$user]);


}

if(isset($_POST["sbmt_subcat"]))
{

$users=DB::select("SELECT distinct Catid as DISTINCT_catid,Subcatid,Subcatname,Detail FROM subcategory order by Catid");
$dis=DB::select("SELECT distinct Catid as DISTINCT_catid FROM subcategory order by Catid");
return view('show_subcat', compact('users','dis'));
}

if(isset($_POST["sbmt_user_en"]))
{

$users=DB::select("select Username,Userid,Packid,Packname from users Cross Join package");
return view('show_enquiry_user_pack')->with(['users'=>$users]);
}

if(isset($_POST["sbmt_user_pack"]))
{

$users=DB::select("SELECT Enquiryid,Packageid,Username,Typeofuser from enquiry Natural JOIN users ");
return view('show_enquiry_user')->with(['users'=>$users]);
}

if(isset($_POST["sbmt_pay"]))
{

$user=DB::select("SELECT Name,Mobileno,Email,Packname,Packprice,Detail from enquiry Inner JOIN package ON Packageid=Packid and Statusfield='confirm'");
return view('show_confirm')->with(['users'=>$user]);


}
if(isset($_POST["sbmt_enq"]))
{

$user=DB::select("SELECT Name,Mobileno,Email,Packname,Packprice,Detail from enquiry LEFT OUTER JOIN package ON Packageid=Packid");
return view('show_confirm')->with(['users'=>$user]);


}


}

public function viewusername(Request $request){

  if(isset($_POST["sbmt"]))
  {
$Name=$request->input('nam');


$users=DB::select("SELECT Userid,Username,Pwd,Typeofuser from users where Username like '%$Name%' ");


return view('show_user')->with(['users'=>$users]);


}

}

public function  viewPackage(Request $request){
  if(isset($_POST["sbmt"]))
  {
$from=$request->input('from');
$to=$request->input('to');

$users=DB::select("SELECT Packid,Packname,Detail from package GROUP BY Subcategory HAVING MAX(Packprice)>=$from and MIN(Packprice)<=$to");
$price=DB::select("SELECT MAX(Packprice) as maxPrice, MIN(Packprice) as minPrice ,COUNT(*) as all_count,AVG(Packprice) as average from package");
return view('show_package', compact('users','price'));


}
}
public function  orderPack(Request $request){
if(isset($_POST["asc"])){
  $users=DB::select("SELECT Packid,Packname,Packprice,Detail from package ORDER BY Packprice,Packid ASC");
}
else if(isset($_POST["dsc"])){
$users=DB::select("SELECT Packid,Packname,Packprice,Detail from package ORDER BY Packprice,Packid DESC");
}
return view('show_packorder')->with(['users'=>$users]);


}

public function  confirm(){
return view('admin_view');


}

public function  confirm_method(Request $request){
  if(isset($_POST["con1"]) and isset($_POST["con2"]) ){
    echo "enter any one of it";
  }
else   if(!isset($_POST["con1"]) and !isset($_POST["con2"]) ){
    echo "enter any one of it";
  }

  else if(isset($_POST["sbmt"])){
  $id=$request->input('id');
if(isset($_POST["con1"])){
  DB::update("UPDATE enquiry SET Statusfield='confirm' where Enquiryid=$id");
}
else if(isset($_POST["con2"])){
  DB::update("UPDATE enquiry SET Statusfield='pending' where Enquiryid=$id");
}

echo "successfully";
}
}

}
