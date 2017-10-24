<?php
$author = $_POST['selUser'];
echo $author;
$posts = mysql_query("SELECT content FROM posts WHERE authod_id='$author'");

echo "<table>";

while($row = mysql_fetch_array($posts))
{   
echo "<tr><td>" . $row['content'] . "</td></tr>";  
}

echo "</table>";
?>
