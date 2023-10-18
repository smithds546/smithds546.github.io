<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BMI Table</title>
<style type="text/css">
  table, th, td {
    border: 1px solid black;
  }
</style>
</head>
<body>

<?php
echo "hello";
$min_weight = $_GET["min_weight"];
$max_weight = $_GET["max_weight"];
$min_height = $_GET["min_height"];
$max_height = $_GET["max_height"];

echo "<table>";
echo "<tr><th></th>";
for ($h = $min_height; $h <= $max_height; $h += 5) {
  echo "<th>$h cm</th>";
}
echo "</tr>";

for ($w = $min_weight; $w <= $max_weight; $w += 5) {
  echo "<tr><th>$w kg</th>";
  for ($h = $min_height; $h <= $max_height; $h += 5) {
    $bmi = round(($w / pow(($h / 100), 2)), 3);
    echo "<td>$bmi</td>";
  }
  echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
