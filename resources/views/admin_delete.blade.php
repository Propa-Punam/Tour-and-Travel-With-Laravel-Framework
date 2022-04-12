


<html>
<head>
<title>update user</title>
<link rel="stylesheet" type="text/css" href="/css/mystyle.css">
<link rel="stylesheet" type="text/css" href="/css/admin_css.css">


</head>
<body>





<div class="main_home_div">
           <h1  id="top_heading_id" class="top_heading">tour and travels....</h1>
       </div>

<div>
<ul>
  <li><a href="#news">Logout</a></li>
  <li><a class="active" href="#home">Home</a></li>


</ul>

</div>


   <div class="about" id="about_id" >
       <div class="about" id="about_id" >
		<h1 class="about_us">Delete a table</h1>
	 <span class="about">

		 <div style="max-width: 100%;">

				 <div style="float: left; width: 100%;">


<form action="/deleteTable" method="post">
{{ csrf_field() }}
Table name:<br>
<input type="text" name="tablename">
<br><br>
<input type="submit" value="Delete" name="sbmt">
</form>

</div>
</div>
<div class="about" id="about_id" >
    <div class="about" id="about_id" >
 <h1 class="about_us">Delete by Id</h1>
<span class="about">

  <div style="max-width: 100%;">

      <div style="float: left; width: 100%;">


<form action="/deleteid" method="post">
{{ csrf_field() }}
Table name:<br>
<input type="text" name="tablename">
<br>
ID :<br>
<input type="text" name="id">
<br>
PRIMARY KEY name:<br>
<input type="text" name="pname">
<br><br>
<input type="submit" value="Delete" name="sbmt">
</form>

</div>
</div>



</body>
</html>
