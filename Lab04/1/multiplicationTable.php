<?php
echo "<table>";

//print header for columns
echo '<tr>';
echo '<td> </td>';
for ($i=1; $i<=100; $i++)
{
  echo '<td><b>' . "$i" . '  ' . '</b></td>';
}
echo '</tr>';

for ($i=1; $i<=100; $i++)
{
  echo '<tr>' . '<td><b>' . $i . '</b></td>';

  for ($j=1; $j<=100; $j++)
  {
    $output = $i*$j;
    echo "<td>" . " " . "$output" . '  ' . "</td>";
  }

  echo '</tr>';
}


echo "</table>";
?>
