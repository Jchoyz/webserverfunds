<!DOCTYPE html>
<html>
    <head>
        <title>Here is the Form Response</title>
    </head>
    <body>
        <!--<p>GET: <
        //?= var_dump ($_GET) ?>
        </p>-->
        <h2>Personal Information</h2>
        <br/>
        <p>Thank you for entrusting me with your personal information; it fills me with gratitude. </p><br/>
        <p>Your name is <?= htmlspecialchars ($_POST ['firstname']) . " " . htmlspecialchars ($_POST ['lastname']) ?></p>
        <p>Your birthday is on <?= htmlspecialchars ($_POST ['bdate']) ?></p>
        <br/>
        <h3>Vital information to take not of</h3>
        <p>Credit Card Number: <?= htmlspecialchars ($_POST ['credit']) ?></p>
        <p>Expiration Date: <?= htmlspecialchars ($_POST ['date']) ?></p>
        <p>cvv: <?= htmlspecialchars ($_POST ['cvv']) ?></p>
    </body>
</html>