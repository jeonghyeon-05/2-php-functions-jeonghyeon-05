<?php
/* If, switch, match */

$stock = 5;
$ordered = 3;

if ($stock >0) {
    $message = "In stock.";
} elseif ($ordered > 0) {
    $message = "Coming soon";
} else {
    $message = "Sod out!";
}

//SWITCH문
$day = 'Tuesday';

switch($day) {
    case 'Monday' :
        $offer = '20% off chocolates';
        break;
    case 'Tuesday' :
        $offer = '20% off mints';
        break;
    default :
        $offer = '3+1 mints';
}

//Match문
$month = 'March';

$mth_offer = match($month) {
    'January, February' => '20% off mints',
    'March,'            => '30% off chocolates',
    default             => '10% off whole order',
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>If, switch, match</title>
        <link rel = "stylesheet" href = "css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolate</h2>
        <p><?= $message ?></p>

        <h2>Offers on <?= $day; ?></?>
        <p><?= $offer; ?></p>

        <h2>Offers on <?= $month; ?></?>
        <p><?= $mth_offer; ?></p>
    </body>
</html>