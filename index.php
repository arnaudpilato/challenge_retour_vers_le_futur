<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Challenge Retour vers le futur</title>
</head>
<body>
<h1>Challenge Retour Vers Le Futur</h1>
<section>
    <?php
    $presentTime = new DateTime();
    $destinationTime = new DateTime();
    echo $presentTime->format("M d Y a h:i");
    $destinationTime->setDate(1969, 8, 15,)->setTime(14, 23);?><br><?php
    echo $destinationTime->format("M d Y a h:i");?><br><br><?php

    $interval = date_diff($presentTime, $destinationTime);
    echo $interval->format('%R%y years, %m months, %d days, %h hours and %i minutes');?><br><br><?php

    $time = date_diff($presentTime, $destinationTime);
    $energy = $time->format('%a') * (60 * 24);
    echo "You need " . round($energy / 10000) . " liters of gasoline for your destination";
    ?>
</section>
</body>
</html>
