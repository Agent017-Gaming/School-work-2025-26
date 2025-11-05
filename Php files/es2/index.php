<?php

function printParagraphs($n): void{
  echo "<h2>Paragraphs</h2>";
  for ($i = 1; $i <=  $n; $i++) {
    echo "<p>Paragrafo $i</p>";
  }
}
function printOrderedList($n): void {
  echo "<h2>Ordered List</h2>";
  echo"<ol>";
  for ($i = 1; $i <=  $n; $i++){
    echo "<li>Item $i</li>";
  }
  echo "</ol>";
}
function printUnorderedList($n): void {
  echo "<h2>Unorderd List</h2>";
  echo "<ul>";
  for($i = 1; $i <= $n; $i++){
    echo "<li>Item $i</li>";
  }
  echo "</ul>";
}
function printTable($rows, $columns): void{
  echo "<table>";
  for($i = 1; $i <= $rows; $i++){
    echo "<tr><tr>";
    for($y = 1; $y <= $columns; $y++){
      echo "<td>" . ($i*$y) . "</td>";
    }
  }
  echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page title</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>My first PHP page</h1>

  <?php
  $n = rand(2, 5);
  $m = rand(2, 7);
  $o = rand(2, 10);
  $row = rand(2, 4);
  $columns = $row;
  printParagraphs($n);
  printOrderedList($m);
  printUnorderedList($o);
  printTable($row, $columns);
  ?>
  <script src="script.js"></script>
</body>

</html>