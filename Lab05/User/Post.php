<?php
$USERNAME = $_POST["userLogin"];
$POST = $_POST["post"];

$mysqli = mysql_connect('mysql.eecs.ku.edu', 'pbhat', 'poppy');
mysql_select_db('pbhat');

if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}

$POSTNO = mysql_num_rows(mysql_query("SELECT * from posts")) + 1;

$existence = mysql_query("SELECT * FROM users WHERE (user_id = '$USERNAME')");
$insert = "INSERT INTO posts (post_id, content, authod_id) VALUES ('$POSTNO', '$POST', '$USERNAME');";

if ($USERNAME == "" || $POST == "")
{
    echo ("no user entry");
    exit();
}
else if (mysql_num_rows($existence) == 0) 
{
    echo ("user does not exist");
    exit();
}
else
{
    mysql_query($insert);
    echo ("post created");
    exit();
}

$mysqli->close();


?>
