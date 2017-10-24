<?php

$mysqli = mysql_connect('mysql.eecs.ku.edu', 'pbhat', 'poppy');
mysql_select_db('pbhat');

if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}

$query = mysql_query("SELECT user_id FROM users");

echo ("
    <head>
        <title>
            View User Posts
        </title>
    </head>

    <body>
    <form action='DisplayPost.php'>
    <select>");
      while ($row = mysql_fetch_array($query))
      {
        echo "<option id='selUser' value='" . $row['user_id'] . "'>" . $row['user_id'] . "</option>";
      } 
?>

</select> 
    <input type="submit" name="submit" action="DisplayPost.php">
</form>
<p id="par"></p>

</body>
