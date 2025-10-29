<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page title</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>My first PHP page</h1>
  <h2>Paragraphs</h2>
  <?php 
  $n = 5;
  for($i = 1; $i <= $n; $i++){
    echo "<p>Paragraph 1</p>";
  }
  ?>
  <h2>Ordered list</h2>
  <ol>
    <?php
    $ol = 2;
    for($i =1; $i <= $ol; $i++){
      echo "<li>Item $i</li>";
    } 
    ?>
  </ol>
  <h2> Unorrdered list</h2>
  <ul>
    <?php
    $m = rand(1, 5);
    for($i =1; $i <= $m; $i++){
      echo "<li>Item $i</li>";
    } 
    ?>
  </ul>
  <h2>Table</h2>
  <table>
    <?php
    $t = 4;
    for($i = 1; $i <= $t; $i++){
      echo "<tr></tr>";
      for($y = 1; $y <= $t; $y++){
        echo "<td>". ($i*$y) ."</td>";
      }
    } 
    ?>
  </table>
  <script src="script.js"></script>
</body>

</html>