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
            if (!$conn) {
                die("Connection failed: " . $conn->mysqli_connect_error);
            }
            else {
                echo "Connected successfully";
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
                $sql = "SELECT * FROM users WHERE lastname = $lastname"; //WHERE lastname = $lastname
                $result = mysqli_query($conn, $sql);
                
                foreach ($result as $row) {
                    $row["firstname"] == $firstname
                    echo " Hello {$row['firstname']} | {$row['lastname']}";
                    echo "</br> {$row['bdate']} | {$row['credit']} | {$row['expdate']} | {$row['cvv']}";
                    $found = true;
                    break;
                }

                if ($result->num_rows > 0) {
                    echo "<h1>Filtered Results</h1>";
                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Birthday</th><th>Credit</th><th>expdate</th><th>cvv</th></tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['firstname']}</td>
                                <td>{$row['lastname']}</td>
                                <td>{$row['bdate']}</td>
                                <td>{$row['credit']}</td>
                                <td>{$row['expdate']}</td>
                                <td>{$row['cvv']}</td>
                            </tr>";
                    }

                    echo "</table>";
                } 
                else {
                    echo "<p>No records found.</p>";
                }
                
            }

            // Close the connection
            $conn->close();
        ?>

    </body>
</html>

