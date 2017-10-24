<?php 
$mysqli = mysql_connect('mysql.eecs.ku.edu', 'pbhat', 'poppy');
mysql_select_db('pbhat');

if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}

$query = "SELECT * FROM posts";
$result = mysql_query($query);

echo "<b>Posts</b><br><br><form action='Purge.php'><table>"; 

echo "<tr><th>Author</th><th>Content</th><th>Delete</th>";

while($row = mysql_fetch_array($result))
{   
echo "<tr><td>" . $row['authod_id'] . "</td><td>" . $row['content'] . "</td><td><input id='" . $row['post_id'] .  "' type='checkbox'></td></tr>";  
}

echo "</table><input type='submit'></form>";

mysql_close();
?>
