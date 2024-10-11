<!DOCTYPE html>
<html>
    <head>
        <title>Form Response</title>
    </head>
    <body>
        <!--<p>GET: <
        //?= var_dump ($_GET) ?>
        </p>-->
        <h1>Important Stuff to take into Consideration</h1>
        <p>Thank you for entrusting me with your personal information; it fills me with gratitude. </p><br/>
        <h3>Personal Information</h3>
        <p>Your name is <?= htmlspecialchars ($_POST ['firstname']) . " " . htmlspecialchars ($_POST ['lastname']) ?></p>
        <p>Your birthday is on <?= htmlspecialchars ($_POST ['bdate']) ?></p>
        <h3>Vital information to take not of...</h3>
        <p>Credit Card Number: <?= htmlspecialchars ($_POST ['credit']) ?></p>
        <p>Expiration Date: <?= htmlspecialchars ($_POST ['date']) ?></p>
        <p>cvv: <?= htmlspecialchars ($_POST ['cvv']) ?></p>
        <h3>Funsies :> </h3>
        <!--<p>Chicken Preference -> <//?= htmlspecialchars ($_POST ['favouritechicken']) ?></p> -->
    </body>
</html>