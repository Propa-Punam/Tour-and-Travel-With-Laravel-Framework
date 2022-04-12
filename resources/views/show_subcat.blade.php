
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/admin_css.css">
  </head>
  <body>

    <table border="0" width="90%" height="300px" align="center" class="tableshadow">
    <tr><td class="toptd">View subcategory with distinct category</td></tr>
    <tr><td align="center" valign="top" style="padding-top:10px;">
    <table border="0" align="center" width="95%">
    <tr><td style="font-size:15px; padding:5px; font-weight:bold;" >Catid</td>
<td style="font-size:15px; padding:5px; font-weight:bold;" >Subcatid</td>
<td style="font-size:15px; padding:5px; font-weight:bold;" >Subcatname</td>
<td style="font-size:15px; padding:5px; font-weight:bold;" >details</td>
    </tr>

    <?php
    foreach ($dis as $dis) {



      echo "<tr><td style=' padding:5px;'>$dis->DISTINCT_catid</td></tr>";





  }
    foreach ($users as $users) {



      echo "<tr><td style=' padding:5px;'>$users->DISTINCT_catid</td>
    
<td style=' padding:5px;'>$users->Subcatid</td>
<td style=' padding:5px;'>$users->Subcatname</td>
<td style=' padding:5px;'>$users->Detail</td>

      </tr>";





    }


echo "there are two distinct categoryid";




    ?>


  </body>
</html>
