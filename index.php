




<html>
<head>
     <title>
          Places in Sri Lanka
     </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/css1.css">
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
               
                       <form method="post" action="index.php" >
                         <input type="search" name="search">
                         <button type="submit">Search</button>
               </form>
          </div><!--site_search-->

          </div>
          <!--top-br-->
          <header class="clearfix">
               <div class="logo">
                    <h1>
                         Come And See!Enjoy Your Life
                    </h1>
                    <p>This is your Choises</p></br>

                     <p ><b >Hellow..WELCOME</b></p> 
                     <?php 
                   require_once('ums/connection.php');
                     if (isset($_POST['submit1'])) {
                      //extract(var_array)
                      	$username=$_POST['username'];
                     	if(!preg_match("/^[a-zA-Z]*$/",$username)){
                     		echo "Only lettors and white spaces allowed";
                     	}
                     	else{
                            echo $username; 
                            //echo "<b>".$_POST['name']."</b>";
                     	}


//$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['username'];
$is_delete=0;
$hashed_password=sha1($password);

 $id1="INSERT INTO user(username,email,password,is_delete) VALUES('{$username}','{$email}','{$hashed_password}','{$is_delete}')";
$result=mysqli_query($connection,$id1);
if($result){
  //echo "1 Recored added";
}
else{
  echo "query is failed\n";
}






                    

                     }

                     
                    ?>
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
          <div class="intro clearfix">
               <div class="col">
                    <p>colll</p>
                       <div class="introimge1">
                   <img  src="img/sembuwaththa-lake (1).jpg"width="241px">
                       </div><!-- introimge1 -->
               <div class="introimgtxt">
                   <h1>Sembuwatta Lake</h1>
                   <P>Sembuwatta Lake is a tourist attraction situated at Elkaduwa in the Matale District of Sri Lanka, adjacent to the Campbell’s Lane Forest Reserve. Sembuwatta Lake is a man-made lake created from natural spring water. Alongside the lake is a natural swimming pool. Sembuwatta Lake is believed to be 9 m to 12 m deep.</P>
             <a href="m2.php">Read More </a><hr size="5px" color="blue"><br><br>
             
              </div><!--introimgtxt -->

             <div class="introimge2">
             <img  src="img/piti.jpg" width="241px" height="180px">
             </div><!--introimge3 -->
             <div class="introimgtxt">
                   <h1>Pitawala Pathana</h1>
                   <p>
                       Pitawala 'Pathana' is a unique grassland found in the Knuckles Conservation Forest, Sri Lanka. This pathana has a great ecological value.<br>
                       In Pitawala Pathana a grass cover spreads over an area of about 10 ha of a gently sloping rock slab covered with just a thin soil layer. The turf grass of about 10 cm in height gives a velvety appearance to this sloping expanse of grassland.[1] Isolated and scattered trees and shrubs could be seen. Many endemic plant and animal species are found.
                   </p>
                   <a href="m6.php">Read More</a><hr size="5px" color="blue"><br><br>
              </div>
           
            </div>

             <div class="col">
               <p>coll222</p>
                <div class="introimge2">
                <img  src="img/Matale_aluviharaya.jpg" width="241px">
                </div><!--introimge2 -->
            <div class="introimgtxt">
                    <h1>Aluvihare Rock Temple</h1>
                   <p>
   The Aluvihare Rock Temple (also called Matale Alu Viharaya) is a sacred Buddhist temple located in Aluvihare, Matale District of Sri Lanka.Surrounded by hills, the Aluvihara cave temple is situated 30 km north of Kandy on the Matale-Dambulla road. The history of Aluvihare Rock Temple is traced back to the 3rd Century B.C to the reign of King Devanampiyatissa. 
</p>
<a href="m3.php">Read More</a><hr size="5px" color="blue"><br><br>
           </div><!--introimgtxt2 -->
           <div class="introimge2">
                <img  src="img/knu.jpg" width="241px">
            </div><!--introimge2 -->
              <div class="introimgtxt">
                    <h1>Knuckles Mountain Range</h1>
                   <p>
   Knuckles Mountain range is an unusual terrestrial landform located in Matale and Kandy, in Central Province, Sri Lanka. The name was given by the British, and the locals call this range 'Dumbara Kanduvetiya', which means mist-laden mountains. Knuckles Mountain Range is called so because of its uncanny resemblance to the fingers of a clenched fist. The range is a World Heritage Conservation Area and is relatively untouched. The range features 34 peaks, ranging between 900 metres to 2000 metres. 
</p>
<a href="m7.php">Read More</a><hr size="5px" color="blue"><br><br>
           </div><!--introimgtxt2 -->
           </div>
           
           

           <div class="col">
               <p>coll33</p>
               <div class="introimge2">
                <img  src="img/_MG_1467.JPG" width="241px" height="180px">
              </div><!--introimge2 -->
              <div class="introimgtxt">
                   <h1>Wasgamuwa National Park</h1>
                   <p>
                      Wasgamuwa National Park is a natural park in Sri Lanka situated in the Matale and Polonnaruwa Districts. It was declared to protect and to make a refuge for the displaced wild animals during the Mahaweli Development Project in 1984 and is one of the four National Parks designated under the Project.Wasgamuwa is one of protected areas where Sri Lankan Elephants can be seen in large herds. It is also one of the Important Bird Areas in Sri Lanka. 
                   </p>
                   <a href="m4.php" >Read More</a><hr size="5px" color="blue"><br><br>
              </div>
<!--strt2 -->
              <div class="introimge2">
                <img  src="img/1200px-Nalanda_Gedige.jpg" width="241px" height="180px">
              </div><!--introimge2 -->
              <div class="introimgtxt">
                   <h1>Nalanda Gedige</h1>
                   <p>
                      Nālanda Gedige ) is an ancient complete stone temple near Matale, Sri Lanka and its original site was considered as the center of Sri Lanka. The building was constructed in between 8th and 10th centuries with dravidian architecture in( Pallava style )and is believed to have been used by Buddhists. 
                   </p>
                   <a href="nlnd.php" >Read More</a><hr size="5px" color="blue"><br><br>
              </div>
              <!--end22 -->
           </div>

           <div class="col">
               <p>coll44</p>
               <div class="introimge2">
                <img  src="img/muthi.jpg" width="241px" height="180px">
              </div><!--introimge4 -->
              <div class="introimgtxt">
                   <h1>Sri Muthumariamman Temple</h1>
                   <p>
                    The land was originally part of a paddy field and was gifted by the owner in 1852. The current temple was built in 1874, funded by the Nattukkottai Chettiar.[4] This temple is used by both Hindus and Buddhists. The temple was originally a small statue under a tree prayed to by the Hindu people but has been developed by the people in Matale.<br>

                    </p>
                    <a href="m5.php">Read More</a><hr size="5px" color="blue"><br><br>
              </div>
<!--strt2 -->
              <div class="introimge2">
                <img  src="img/bbr2.jpg" width="241px" height="180px">
              </div><!--introimge4 -->
              <div class="introimgtxt">
                   <h1>Bambarakiri Ella</h1>
                   <p>
                    Bambarakiri Ella Falls in Sri Lanka or Bambarakele Waterfall is a tall waterfall in Sri Lanka. Dropping down a sheer vertical rockface down a height of 263m (863 feet), Bambarakanda waterfall takes the position of the world’s 299th tallest waterfall.<br>

                   </p>
                    <a href="bbrkiri.php">Read More</a><hr size="5px" color="blue"><br><br>
              </div>
              <!--end22 -->
           </div>
          
          

               
               
               
          </div><!-- intro -->

   </div><!-- wrpper -->

   

<?php

mysql_close('$connection');
?>

</body>


</html>
