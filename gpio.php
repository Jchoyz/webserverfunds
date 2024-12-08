<!DOCTYPE html>
<html>
    <body>
        <?php 
            shell_exec($_GET "gpio toggle 27"); 
            $read = shell_exec($_GET "gpio read 27"); 
            echo "GPIO 27 state: $read";
        ?>     
    </body>
</html>
