<?php
    session_start();
    $v_id = $_GET['id'];
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
    $sql = "SELECT * FROM Venue WHERE v_id = '$v_id'";
?>
<html>
    <head>
        <title>Venue</title>
        <link href="css/more_details.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/modal.css" />
    
    <script>
        $(function() {
        // contact form animations
        $('#contact').click(function() {
            $('#contactForm').fadeToggle();
        })
        $(document).mouseup(function (e) {
            var container = $("#contactForm");
            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                container.fadeOut();
            }
        });
        
        });

        
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
                            <?php echo $row['v_name'];?>
                            </div>
                        <div>
                        <div class="row">
                            <div class="col-md-6" id="image" >
                                <?php
                                    echo "<img id = 'imgid' src='".$row['image_url']."'\" >";
                                    
                                    if(empty($_SESSION["username"]))
                                    {
                                        ;
                                    }
                                    else{
                                        ?>
                                            <button id="bkmrk" onclick="addToList();">BOOKMARK</button>
                                        <?php
                                    }
                                ?>
                                
                                
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
                                
                                <div id="contact" >
                                    ENQUIRE NOW
                                </div>
                                <div id="contactForm">        
                                
                                <small>We'll get back to you as quickly as possible</small>  
                                
                                    <div id="forms">
                                        Looking For?<input id="lk" type="text" placeholder="E.g: Venue, Food" required/>
                                        Event Date<input id="date" type="date" placeholder="dd/mm/yyyy" required/>
                                        Approximate Budget<input id="bud" type="text" placeholder="E.g: Rs. 10,000/-"/>
                                        Name<input id="name" placeholder="Name" type="text" required />
                                        Email<input id="email" placeholder="Email" type="email" required />
                                        Contact<input id="cont" placeholder="Contact" type="tel" required />
                                        Message<textarea id="more"></textarea>
                                        <input class="formBtn" type="submit"  />
                                        <input class="formBtn" type="reset" />
                                    </div>
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="row" id="desc">
                        <?php 
                            echo $row['description'];
                        ?>
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
