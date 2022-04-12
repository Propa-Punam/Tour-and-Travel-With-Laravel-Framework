
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
    <tr><td style="font-size:15px; padding:5px; font-weight:bold;" >Package Id</td>
    <td style="font-size:15px; padding:5px; font-weight:bold; ">Package name</td>
    <td style="font-size:15px; padding:5px; font-weight:bold; ">Package Price</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Details</td>

    </tr>

    <?php
    foreach ($users as $users) {




      		echo "<tr><td style=' padding:5px;'>$users->Packid</td>
      		<td style=' padding:5px;'>$users->Packname</td>
          <td style=' padding:5px;'>$users->Packprice</td>
      		<td style=' padding:5px;'>$users->Detail</td>

      	   </tr>";
    }






    ?>


  </body>
</html>
