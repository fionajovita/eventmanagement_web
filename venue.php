<?php
    $servername = "localhost";
    $db_username = "root";
    $password = "Difi3540";
    $dbname = "EventManagement";
    // Create connection
    $conn = new mysqli($servername, $db_username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    $sql = "SELECT * FROM Venue";
?>
<html>
    <head>
        <title>Venue</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/venue.css" rel='stylesheet' type='text/css'>
    </head>
    <body>
    <ul>
<<<<<<< HEAD
<li><a href="login-check.php">Login</a></li>
=======
<li><a href="login.html">Login</a></li>
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
  <li><a href="contactus.html">Contact</a></li>
  <li><a href="aboutus.html">About</a></li>
 <li><a href="index.html#event">Events</a></li>
 <li><a href="index.html">Home</a></li>
  
</ul>
<div class="main">
    <div id="name">VENUE
    </div>
        <div class = "venue-container" >
        <?php
            if ($result=mysqli_query($conn,$sql))
            {
                // Fetch one and one row
                while ($row=mysqli_fetch_assoc($result))
                {
                    
<<<<<<< HEAD
                    echo "<a href=more_details_venue.php?id=",urlencode($row['id']),">";
=======
                    echo "<a href=more_details_venue.php?id=",urlencode($row['v_id']),">";
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
                    ?>
                    <div class = "single-ven" >
                        <?php
                        echo "<img id=\"ven\" src='".$row['image_url']."'\" ><br>";?>
                        <div class="image-wrap">
                            
                            <span class="description"><?php $row['name']?></span>
                            
                        </div>
                        
                        <?php
                        echo $row['name']."<br>";
                        ?><img src="images/locationmarker.png" style="height:20px; width:20px;">
                        <?php echo $row['address'];
                        ?>     
                    </div> 
                    </a>          
                    <?php
                }
                // Free result set
                mysqli_free_result($result);
            }
                ?>
            
        </div></div>
        <div class="sm">
            <center>
            <h2>Social Media Profiles</h2>
            </center>
            <center>
            <!-- Add font awesome icons -->
            <a href="https://www.facebook.com/" class="fa fa-facebook "></a>
            <a href="https://twitter.com/login" class="fa fa-twitter"></a>
            <a href="https://www.google.com/" class="fa fa-google"></a>

            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
            <a href="https://in.pinterest.com/" class="fa fa-pinterest"></a>
            <a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost"></a>
            <a href="https://www.skype.com/en/" class="fa fa-skype"></a>

            </center>
        </div>
 
</body>
<footer>
<table class="foot" cellspacing="50" style="width:100%">
<tr><td>
<b>RECENT WORK</b><br><br>
 <img src="images/scroll7.jpg" style="width:8%; position:absolute;left:40px;height:13%"><br><br><br>
  <img src="images/scroll5.jpg" style="width:8%; position:absolute;left:40px;height:13%"><br><br><br>
 

<<<<<<< HEAD
<button class="bttn"><a href="gallery.html">Read more>></a></button></td>
<td class="au">
<b>ABOUT US</b><br>
Dream Team is a Leading Destination Wedding Planner, Wedding Designer <br>& Decorators, CorporateEvent Planner, Party Organisers, Marraige Planner, <br>Wedding Reception Planner in Gurgaon, Delhi, Noida, Faridabad, Meerut, Jodhpur, Udaipur,near me India<br><br>
=======
<button class="bttn"><a href="gallery.html"  >Read More>></a></button></td>
<td class="au">
<b>ABOUT US</b><br>
Dream Team is a Leading Destination Wedding Planner, Wedding Designer <br>& Decorators, CorporateEvent Planner, Party Organisers, Marraige Planner, <br>Wedding Reception Planner in Gurgaon, Delhi, Noida, Faridabad, Meerut, Jodhpur.<br> Udaipur,near me India<br><br>
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
 <br><button class="bttn"><a href="aboutus.html">Read more>></a></button></td>

<td>
<b>CONTACT</b><br>
 <a href="mailto:dreamteam@difi.in">dreamteam@difi.in</a><br>
 9910387086,9971214537,7042720028<br>
 Unit No - 309, 3rd Floor, Vipul Trade Centre, Sohna<br> Road, Sector -48, Gurgaon - 122018<br><br><br>
 <button class="bttn">Read more>></button>
</td>


 </tr>
</table>
</footer>
</html>
<?php 
mysqli_close($conn);
?>
