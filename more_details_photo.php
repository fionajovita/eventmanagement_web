<?php
<<<<<<< HEAD
    session_start();
    
    $id = $_GET['id'];
    
=======
    $p_id = $_GET['id'];
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
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
<<<<<<< HEAD
    $sql = "SELECT * FROM Photographer WHERE id = '$id'";
?>
<html>
    <head>
        <title>Photographer</title>
=======
    $sql = "SELECT * FROM Photographer WHERE p_id = '$p_id'";
?>
<html>
    <head>
        <title>Photographer Details</title>
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
        <link href="css/more_details.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/modal.css" />
<<<<<<< HEAD
        
=======
    
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
    <script>
        $(function() {
        // contact form animations
        $('#contact').click(function() {
            $('#contactForm').fadeToggle();
<<<<<<< HEAD
        });
=======
        })
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
        $(document).mouseup(function (e) {
            var container = $("#contactForm");
            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                container.fadeOut();
            }
        });
        
        });
<<<<<<< HEAD
        
        $("#reset").click(function(){
        $('form1')[0].reset();
        });
        
=======
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
    </script>
    </head>
    <body>

        <div class = "venue-container" onclick="">
        <?php
                if($result=mysqli_query($conn,$sql))
                {
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="container">
                        <div class="row">
                            <div id = "venue_name">
<<<<<<< HEAD
                            <?php echo $row['name'];?>
=======
                            <?php echo $row['p_name'];?>
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
                            </div>
                        <div>
                        <div class="row">
                            <div class="col-md-6" id="image" >
                                <?php
                                    echo "<img id = 'imgid' src='".$row['image_url']."'\" >";
<<<<<<< HEAD
                                    $string = preg_replace('/\s+/', '', $row['name']);
                                    $cookie_name = $string;
                                    if(isset($_SESSION["username"]))
                                    {
                                                                               
                                        if(isset($_COOKIE[$cookie_name]) && ($_COOKIE[$cookie_name])=="set") {             
                                            //unset($_COOKIE[$cookie_name]);
                                                                        
                                            echo "<button class=\"bkmrk-unset\" onclick=\"document.location.href='removebookmarks.php?id=$id&name=Photographer&str=$string'\"><img src=\"images/bookmark.png\"/></button>";                                            
                                        }
                                        else{
                                            //unset($_COOKIE[$cookie_name]);
                                            
                                            echo "<button class=\"bkmrk-set\" onclick=\"document.location.href='addtobookmarks.php?id=$id&name=Photographer'\"><img src=\"images/bookmark.png\"/></button>";                                     
                                        }
                                        
                                    }
                               
                                ?>
                                
                                
=======
                                ?>
                                
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="col" id="contactinfo" >
                                    <div id="side-header">
                                       For More Details :
                                    </div>
                                    <div id="content">
                                    <img src="images/address">&emsp;&emsp;<?php echo $row['address'];?><br>
                                    <img src="images/email">&emsp;&emsp;<?php echo $row['email'];?><br>
                                    <img src="images/phone">&emsp;&emsp;<?php echo $row['contact'];?>
                                    </div>
                                </div>
<<<<<<< HEAD
                                
=======
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
                                <div id="contact" >
                                    ENQUIRE NOW
                                </div>
                                <div id="contactForm">        
<<<<<<< HEAD
                                <small>We'll get back to you as quickly as possible</small>  
                                <form id="form1" action="send_enq.php" method="POST">
                                    <div id="forms">
                                        Looking For?<input id="lk" type="text" placeholder="E.g: Photographer, Food" name="lk" required/>
                                        Event Date<input id="date" type="date" placeholder="dd/mm/yyyy" name="date" required/>
                                        Approximate Budget<input id="bud" type="text" name="budget" placeholder="E.g: Rs. 10,000/-"/>
                                        Name<input id="name" placeholder="Name" name="name" type="text" required />
                                        Email<input id="email" placeholder="Email" name="email" type="email" required />
                                        Contact<input id="cont" placeholder="Contact" name="contact" type="tel" required />
                                        Message<textarea id="more" name="msg"></textarea>
                                        <input class="formBtn" type="submit"/>
                                        <input class="formBtn" id="reset" type="reset" name="reset" />
                                        <?php $_SESSION['id']=$id; ?>
=======
                                
                                <small>We'll get back to you as quickly as possible</small>  
                                <form action="#">
                                    <div id="forms">
                                        Looking For?<input id="lk" type="text" placeholder="E.g: Venue, Food" required/>
                                        Event Date<input id="date" type="date" placeholder="dd/mm/yyyy" required/>
                                        Approximate Budget<input id="bud" type="text" placeholder="E.g: Rs. 10,000/-"/>
                                        Name<input id="name" placeholder="Name" type="text" required />
                                        Email<input id="email" placeholder="Email" type="email" required />
                                        Contact<input id="cont" placeholder="Contact" type="tel" required />
                                        Message<textarea id="more"></textarea>
                                        <input class="formBtn" type="submit" />
                                        <input class="formBtn" type="reset" />
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row" id="desc">
<<<<<<< HEAD
                        <?php 
                            echo $row['description'];
                        ?>
=======
                        <?php echo $row['description'];?>
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
                        </div>
                    </div>
                    
                    
                    
                    
                    <?php
                    // Free result set
                    mysqli_free_result($result);
                }
                ?>
            
        </div>
        
    </body>
</html>
<?php 
mysqli_close($conn);
?>
