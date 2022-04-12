
<html>
<head>
<title>view category</title>
<link rel="stylesheet" type="text/css" href="/css/admin_css.css">
<link rel="stylesheet" type="text/css" href="/css/mystyle.css">

<style>
    .button {
  background-color: #f44336;
  color: white;
  width: 100%;
  padding: 14px 25px;
  margin-left: 60%;
  text-decoration: none;
  display: inline-block;
}

.button:hover {
  background-color: red;
}

</style>
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

	 <span class="about">

		 <div style="max-width: 100%;">

				 <div style="float: left; width: 50%; margin-left:40%;">


<form action="/viewTable" method="post">
{{ csrf_field() }}
<input class ="button" type="submit" value="Registered Users" name="sbmt">

<input class ="button" type="submit" value="Subcategory" name="sbmt_subcat">
<input class ="button" type="submit" value="Paid Customers" name="sbmt_pay">
<input class ="button" type="submit" value="paid/unpaid user" name="sbmt_user_en">
<input class ="button" type="submit" value="Customers Packages Combinations" name="sbmt_user_pack">
<input class ="button" type="submit" value="paid/unpaid package" name="sbmt_enq">


</form>
<!--
   <div class="about" id="about_id" >
       <h2 style="color:blue">View Packages With Range</h2>
      <span class="about">

        <div style="max-width: 100%;">

            <div style="float: left; width: 100%;"> -->

<!--
              <form action="/viewPackage" method="post">
              {{ csrf_field() }}

              Range from:<br>
              <input type="number" name="from">
              <br>
              Range To:<br>
              <input type="number" name="to">
              <br>

              <br><br>
              <input type="submit" value="submit" name="sbmt">
              </form> -->



            </div>
            <div class="about" id="about_id" >
                <h2 style="color:blue">Search user by name</h2>
               <span class="about">

                 <div style="max-width: 100%;">

                     <div style="float: left; width: 100%;">


                       <form action="/viewUsername" method="post">
                       {{ csrf_field() }}

                       Enter Name:<br>
                       <input type="text" name="nam">


                       <br><br>
                       <input type="submit" value="submit" name="sbmt">
                       </form>



                     </div>

            <div style="float: left; width: 100%;">
              <h2 style="color:blue">View All Packages</h2>

        <form action="/orderPack" method="post">
        {{ csrf_field() }}

        <input type="submit" name="asc" value="Sorted by Ascending Package price" style="margin-bottom:15px;">
        <br>

      <input type="submit" name="dsc" value="Sorted by Decending Package price">




        </form>


            </div>


            <br style="clear: left;" />
          </span>

     </div>
</div>
<div class="about" id="about_id" >
    <h2 style="color:blue">View Packages With Range</h2>
   <span class="about">

     <div style="max-width: 100%;">

         <div style="float: left; width: 100%;">


           <form action="/viewPackage" method="post">
           {{ csrf_field() }}

           Range from:<br>
           <input type="number" name="from">
           <br>
           Range To:<br>
           <input type="number" name="to">
           <br>

           <br><br>
           <input type="submit" value="submit" name="sbmt">
           </form>



         </div>
         <!-- <div style="float: left; width: 100%;">
           <h2 style="color:blue">Set enquiry Status</h2>

     <form action="/confirm_method" method="post">
     {{ csrf_field() }}


     Enquiry ID:<br>
     <input type="number" name="id">
     <br>
   <input type="radio" name="con1" value="Confirm" > Confirm<br>
   <input type="radio" name="con2" value="Pending"> Pending<br>
   <br><br>
   <input type="submit" value="submit" name="sbmt">





     </form>


         </div> -->


         <br style="clear: left;" />
       </span>

  </div>
</div>









</body>
</html>
