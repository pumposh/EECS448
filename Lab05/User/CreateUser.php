<?php 
$USERNAME = $_POST["userCreate"];

$mysqli = mysql_connect('mysql.eecs.ku.edu', 'pbhat', 'poppy');
mysql_select_db('pbhat');

if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}

$existence = mysql_query("SELECT * FROM users WHERE (user_id = '$USERNAME')");
$insert = "INSERT INTO users (user_id) VALUES ('$USERNAME');";

if ($USERNAME == "")
{
    echo ("no user entry");
    exit();
}
else if (mysql_num_rows($existence) > 0)
{
    echo ("user already exists");
    exit();
}
else 
{
    mysql_query($insert);
    echo("user created");
    exit();    
}

$mysqli->close();
?>
