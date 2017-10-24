<?php 
$mysqli = mysql_connect('mysql.eecs.ku.edu', 'pbhat', 'poppy');
mysql_select_db('pbhat');

if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}

$query = "SELECT * FROM users";
$result = mysql_query($query);

echo "<b>Registered Users</b><br><br><table>"; 

while($row = mysql_fetch_array($result))
{   
echo "<tr><td>" . $row['user_id'] . "</td></tr>";  
}

echo "</table>";

mysql_close();
?>
