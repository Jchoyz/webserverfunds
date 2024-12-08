<!DOCTYPE html>
<html>
    <body>
        <?php 
            $output=shell_exec("gpio toggle 27"); 
            echo $output;
            $read=shell_exec("gpio read 27"); 
            echo "GPIO 27 state: $read";
        ?>     
    </body>
</html>
