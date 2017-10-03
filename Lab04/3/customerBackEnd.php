<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';

$USERNAME = $_POST["username"];
$PASSWORD = $_POST["password"];
$ITEM1 = $_POST["item1"];
$ITEM2 = $_POST["item2"];
$ITEM3 = $_POST["item3"];
$SHIPPING = $_POST["shipping"];

$SUBTOTAL = $ITEM1 + $ITEM2 + $ITEM3;
$TAX = $SUBTOTAL * 0.085;
$TOTAL = $SUBTOTAL + $SHIPPING + $TAX;


echo 'Welcome ' . "$USERNAME" . '!';
echo '<br>Your password is ' . "$PASSWORD";
echo '<br><br>Subtotal: ' . '$' . "$SUBTOTAL";
echo '<br>Shipping: ' . '$' . "$SHIPPING";
echo '<br>Tax: ' . '$' . "$TAX";
echo '<br>Total: ' . '$' . "$TOTAL";


 ?>
