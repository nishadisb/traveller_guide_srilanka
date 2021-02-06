

<html>
<?php
//setcookie('language','english',time()+60);
require_once('ums/connection.php');
?>




     <title>
          Places in Sri Lanka
     </title>
     <head>

      <style >
        body {
  height: 500px;
 background-image: url("img/why-do-we-travel.jpg");
 background-color: #cccccc;

  


nav table th tr td{
  padding: 0 15px;
}
}


      </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/css1.css">
<script type="text/javascript">
  function active() {
    // body...
    var search=document.getElementById('searchBar');
    if(search.value=='Search..'){
      search.value='';
      search.placeholder="Search..";


    }
  }

   function inactive() {
    // body...
    var search=document.getElementById('searchBar');
    if(search.value==''){
      search.value='Search..';
      search.placeholder=" ";


</script>

</head>
<body>
     <div class="wrpper">
          <div class="top-br clearfix">
          <div class="top-br-links">
               
          
          
          <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Places</a></li>
               <li><a href="#">Hotels</a></li>
               <li><a href="#">about Us</a></li>

          </ul>
          </div><!--top-br-links-->
          
          <div class="site-search">
               
                       <form method="post" action="" >
    <input type="search" name="search" id="searchBar" value="Search.." maxlength="25" autocomplete="off" onMousedown="active();" onBlur=" inactive(); ">
    <input type="submit" id="SearchBtn" value="Search" name="submit" onfocus="this.value=(this.value=='Submit;')?'':this.value;">
               </form>
          </div><!--site_search-->

          </div>
          <!--top-br-->
          <header class="clearfix">
               <div class="logo">
                    <h1>
                         Come And See!Enjoy Your Life
                    </h1>
                    <p>This is your Choises</p>
                    
               </div><!-- logo -->
               <div class="socialmedia">
                    <ul>
                       <li><a href="#"><img src="img/download (1).png"  width="30" height="30"></a></li>
                       <li><a href="#"><img src="img/download (2).png"  width="30" height="30"></a></li>
                       <li><a href="#"><img src="img/download (3).png"  width="30" height="30"></a></li>
                       <li><a href="#"><img src="img/download (6).png"  width="30" height="30"></a></li>
                    </ul>
                    
               </div><!-- socialmedia -->
          </header>
          <nav>
               <ul>
                 <li> <a href="#">HOME</li>
                <li> <a href="#">ABOUT US</li>
                <li> <a href="#">SERVICES</li>
                <li> <a href="#">PLACES</li>
                <li> <a href="#">CONTACT US</li>

               </ul>
          </nav>

          <div class="">
            <form  method="post" action="index.php">
                <table>
                       <tr>
                          <td>Username:</td><td><input type="text" name="username"></td><br></tr>
                          <tr><td>email:</td><td><input type="email" name="email"></td></tr><br>
                          <tr><td>PassWord:</td><td><input type="password" name="password"></td></tr><br>
                          
                          <td></td><td><INPUT TYPE = "Submit" NAME="submit1" VALUE = "Login"></td>
                       
                  </table>
              </form>
                    </div>
          

   </div><!-- wrpper -->

   



</body>


</html>
<?php

mysqli_close($connection);
?>