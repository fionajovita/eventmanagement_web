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
    // $query = mysqli_query($conn, $sql);
    // $numrows = mysqli_num_rows($query);
    // if ($numrows!=0)
    // {
        
    // }
    // mysqli_close($con);
?>
<html>
    <head>
        <title>Venue</title>
        <link href="css/venue.css" rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        <div class = "venue-container" onclick="">
        <?php
            if ($result=mysqli_query($conn,$sql))
            {
                // Fetch one and one row
                while ($row=mysqli_fetch_row($result))
                {
                    ?>
                    <div class = "single-ven" >
                        <?php
                        echo "<img id=\"ven\" src='".$row[5]."'\" ><br>";?>
                        <div class="image-wrap">
                            <img id="info" src="images/moreinfo.png">
                            <span class="description"><?php $row[3]?></span>
                        </div>
                        <?php
                        echo $row[1]."<br>";
                        ?><img src="images/locationmarker.png" style="height:20px; width:20px;">
                        <?php echo $row[6];
                        ?>     
                    </div>           
                    <?php
                }
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
