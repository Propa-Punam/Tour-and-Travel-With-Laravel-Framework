


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
<form action ="/inset_enq" method="post" class="login_form" style="position: relative;left:500px">
    <div class="container">

{{ csrf_field() }}

<label for="uname"><b>Userid</b></label><input type="number" name="t1"  /><br>
<label for="psw"><b>Packageid</b></label><input type="number" name="t2"  /><br>
<label for="uname"><b>Name</b></label><input type="text" name="t3"  /><br>
<label for="uname"><b>Mobileno</b></label><input type="number" name="t4"  /><br>
<label for="uname"><b>Email</b></label><input type="email" name="t5"  /><br>
<label for="uname"><b>No of days</b></label><input type="number" name="t6"  /><br>
<label for="uname"><b>Children</b></label><input type="number" name="t7"  /><br>
<label for="uname"><b>Adults</b></label><input type="number" name="t8"  /><br>
<label for="uname"><b>Message</b></label><input type="text" name="t9"  /><br>
<br>
<br>

<input class="button" type="submit" value="submit" name="sbmt">
<br>
<input class="button" type="submit" value="confirm payment" name="sbmt_payment">

<input class ="button" type="submit" value="View Users with discount" name="sbmt_dis">

</form>
</div>
