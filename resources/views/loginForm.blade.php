

<html>
<head>
<link rel="stylesheet" href="/css/login and registration.css">

    <title>Login</title>
</head>
<body>

<div class="login">
     <h2 class="login_heading">Login Form</h2>









<form  action="/login" method="post" class="login_form">
    <div class="container">

{{ csrf_field() }}

<label for="uname"><b>Username</b></label><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" /></td></tr>
<label for="psw"><b>Password</b></label><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" /></td></tr></table>
<input class="button" type="submit" value="LOGIN" name="sbmt">



</form>

<div>
    <p class="login">Doesn't have an account? please..<div class=go_to_reg>
            <a  href="/admin" target="_self">Registration</a>
    </div>
    </p>
</div>


</div>


</div>

</body>
</html>
