<!DOCTYPE html>
<html>
    <head>
        <title> Database Filtered Values </title>
    </head>
    <body>
    <?php
        // Database connection settings
        $servername = "localhost";
        $username = "chickenjr";
        $password = "voidnul0"; 
        $database = "scammed"; 

        // Connect to the database
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve filter criteria from the form
        if ($_SERVER['REQUEST_METHOD'] == 'GET') 
        {
            $firstname = ($_GET['firstname']);
            $lastname = ($_GET['lastname']);
            $birthday = ($_GET['bdate']);
            $creditnum = ($_GET['credit']);
            $expiredate = ($_GET ['expdate']);
            $cvv = ($_GET ['cvv']);

            // Query to retrieve filtered data
            $sql = "SELECT * FROM users "; //WHERE lastname = $lastname
            $result = mysqli_query($conn, $sql);
            
            foreach ($result as $row) {
                $row["firstname"] == $firstname
                echo " Hello {$row['firstname']} | {$row['lastname']}";
                echo "</br> {$row['bdate']} | {$row['credit']} | {$row['expdate']} | {$row['cvv']}"
                $found = true;
                break;
            }

            
            
        }

        // Close the connection
        $conn->close();
    ?>

    </body>
</html>

