


<html>
<head>
<link rel="stylesheet" type ="text/css" href="/css/login and registration.css">
<style>
input[type=number] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
}
input[type=email] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
}
</style>
<title> Registration</title>
</head>
<body>

<div class="login"  >
     <h1 class="login_heading">Enquiry Form</h1>
<form action ="/insert_pack" method="post" class="login_form" style="position: relative;left:500px">
    <div class="container">

{{ csrf_field() }}

<label for="uname"><b>Packname</b></label><input type="text" name="t1"  /><br>
<label for="psw"><b>Subcategory id</b></label><input type="number" name="t2"  /><br>
<label for="uname"><b>Packprice</b></label><input type="number" name="t3"  /><br>
<label for="uname"><b>details</b></label><input type="text" name="t4"  /><br>

<br>
<br>

<input class="button" type="submit" value="Add Packages" name="sbmt">
<br>




</form>
</div>
