


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
       <h1 class="about_us">Add or Remove Column</h1>
      <span class="about">

        <div style="max-width: 100%;">

            <div style="float: left; width: 50%;">
              <h2>Add a new Column</h2>

<form action="/addCol" method="post">
  {{ csrf_field() }}
  Table name:<br>
  <input type="text" name="tablename">
  <br>
  Column name:<br>
  <input type="text" name="colname">
  <br>
  Column type:<br>
  <input type="text" name="coltype">
  <br>
  type length:<br>
  <input type="number" name="collen">

  <br><br>
  <input type="submit" value="Add" name="sbmt">
</form>


            </div>
            <div style="float: left; width: 50%;">
              <h2>Remove a Column</h2>

        <form action="/removeCol" method="post">
        {{ csrf_field() }}
        Table name:<br>
        <input type="text" name="tablename">
        <br>
        Column name:<br>
        <input type="text" name="colname">


        <br><br>
        <input type="submit" value="Remove" name="sbmt">
        </form>


            </div>


            <br style="clear: left;" />
          </span>

     </div>
</div>

<div class="about" id="about_id" >
    <h1 class="about_us">Change Type or Rename Column</h1>
   <span class="about">

     <div style="max-width: 100%;">

         <div style="float: left; width: 50%;">
           <h2>Change type of a Column</h2>

<form action="/ChangeCol" method="post">
{{ csrf_field() }}
Table name:<br>
<input type="text" name="tablename">
<br>
Column name:<br>
<input type="text" name="colname">
<br>
Column type:<br>
<input type="text" name="coltype">
<br>
type length:<br>
<input type="number" name="collen">

<br><br>
<input type="submit" value="Change" name="sbmt">
</form>


         </div>
         <div style="float: left; width: 50%;">
           <h2>Rename a Column</h2>

     <form action="/renameCol" method="post">
     {{ csrf_field() }}
     Table name:<br>
     <input type="text" name="tablename">
     <br>
      Old Column name:<br>
     <input type="text" name="ocolname">
     <br>
     New Column name:<br>
    <input type="text" name="ncolname">
    <br>
     Old Column type:<br>
    <input type="text" name="coltype">
    <br>
    Old type length:<br>
    <input type="number" name="collen">


     <br><br>
     <input type="submit" value="Rename" name="sbmt">
     </form>


         </div>


         <br style="clear: left;" />
       </span>

  </div>
</div>
<div class="about" id="about_id" >
		<h1 class="about_us">Update by Id</h1>
	 <span class="about">

		 <div style="max-width: 100%;">

				 <div style="float: left; width: 100%;">


<form action="/updateId" method="post">
{{ csrf_field() }}
Table name:<br>
<input type="text" name="tablename">
<br>
Id:<br>
<input type="text" name="id">
<br>
Column name:<br>
<input type="text" name="colname">
<br>
PRIMARY KEY name:<br>
<input type="text" name="pname">
<br>
new Value( For Numbers):<br>
<input type="number" name="nvalue">
<br>
<h4>OR</h4>
<br>
new Value( For Text):<br>
<input type="text" name="tvalue">

<br><br>
<input type="submit" value="Add" name="sbmt">
</form>

</div>
</div>



</body>
</html>
