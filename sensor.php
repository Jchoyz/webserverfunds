<!DOCTYPE html>
<html>
    <body>
        <?php 
            
            // Run the bme280 binary and capture the output
            $raw = `./bme280`;
        
            // Decode the JSON response into an associative array
            $deserialized = json_decode($raw, true);
        
            if ($deserialized) {
                // Display the decoded data
                echo "<h2>Current Sensor Readings:</h2>";
                echo "<p><strong>Current Sensor:</strong> " . $deserialized["sensor"];
                echo "<p><strong>Temperature:</strong> " . $deserialized["temperature"] . " °C</p>";
                echo "<p><strong>Humidity:</strong> " . $deserialized["humidity"] . " %</p>";
                echo "<p><strong>Pressure:</strong> " . $deserialized["pressure"] . " hPa</p>";
                echo "<p><strong>Altitude:</strong> " . $deserialized["altitude"] . " meters</p>";
            } else {
                echo "<p>Error: Could not decode sensor data.</p>";
            }
            
        ?>     
    </body>
</html>