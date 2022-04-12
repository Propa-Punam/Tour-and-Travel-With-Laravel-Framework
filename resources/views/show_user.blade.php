<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/admin_css.css">
  </head>
  <body>

    <table border="0" width="90%" height="300px" align="center" class="tableshadow">
    <tr><td class="toptd">View Users</td></tr>
    <tr><td align="center" valign="top" style="padding-top:10px;">
    <table border="0" align="center" width="95%">
    <tr><td style="font-size:15px; padding:5px; font-weight:bold;" >Users Id</td>
    <td style="font-size:15px; padding:5px; font-weight:bold; ">Users name</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Type Of User</td>
    </tr>

    <?php
    foreach ($users as $users) {




      		echo "<tr><td style=' padding:5px;'>$users->Userid</td>
      		<td style=' padding:5px;'>$users->Username</td>
      		<td style=' padding:5px;'>$users->Typeofuser</td>
      	   </tr>";




    }
    ?>


  </body>
</html>
