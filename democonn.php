<html>
    <head>
        <title>Sample Connecttion</title>
    </head> 
    <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "Difi3540";
        $dbname = "EventManagement";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT User_id, Username, DOB FROM User";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> id: ". $row["User_id"]. " - Name: ". $row["Username"]. " " . $row["DOB"] . "<br>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
    ?> 

    </body>
</html>
