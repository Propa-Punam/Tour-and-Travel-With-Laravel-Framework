

<html>
<head>
<title>faq page</title>
<link href="/css/admin_page.css" rel='stylesheet' type='text/css'/>



<style>
    .button {
  background-color: dodgerblue;
  color: white;
  width: 400px;
  padding: 14px 25px;
  margin-left:15px;
  text-decoration: none;
  display: inline-block;
}

.button:hover {
  background-color: red;
}

</style>
</head>
<body>

<header>
       <div class="main_home_div">
           <h1  id="top_heading_id" class="top_heading">tour and travels....</h1>
       </div>


   </header>
   <div class="user">

     <form action="/viewTable" method="post">
     {{ csrf_field() }}
     <input class ="button" type="submit" value="Category id With or without  Subcategory" name="union">
    


     </form>
</div>

</body>
</html>
