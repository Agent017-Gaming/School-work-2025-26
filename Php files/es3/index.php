<?php
$listfruit = ["Apple", "Banana", "Orange", "Grapes", "Mango"];
function fruitList($listfruit){
  echo "<ul>";
  foreach ($listfruit as $fruit){
    echo "<li>$fruit</li>";
  }
  echo "</ul> <br>";
}
$translation = [
  "Mela" => "Apple",
  "Banana" => "Banana",
  "Arancia" => "Orange",
  "Uva" => "Grapes",
  "Mango" => "Mango"
];
function translate($tran){
  echo "<p>Whats a 'Mela'? Select One: </p>";
  echo "<select name='fruit'>";
  echo "<option selected disabled> Select one option </option>";
  foreach ($tran as $it => $en){
    echo "<option value = '$it' random>" . $en . "</option>";
  }
  echo "</select> <br>";
}
$studentDetails = [
  "name" => "John Doe",
  "age" => 25,
  "city" => "New York",
  "occupation" => "Web Developer",
  "is_student" => false
];

function oneStudTable($detail){
  echo "<h2>Student Detail</h2>";
  echo "<table>";
  //Davvero fastidio mentre scrivevo questo codice in modo pulito e non copia-incollando ;(
  echo "<thead>
          <tr>
            <th>Attribute</th>
            <th>Value</th>
          </tr> 
        </thead>
        <tbody>";
  foreach ($detail as $att => $val){
    //Stavo provando a capire come potevo mettere La prima lettera Maiuscola e ho trovato due metodi: ucfirst(string $str) e ucwords(string $str)
    $label = ucfirst(str_replace("_", " ", $att));
    
    //Questa era un confuzionario per avevo provato varie modi a capire questa cosa. poi Chat mi ha fatto capire
    if(is_bool($val)){
      $val = $val ? "Yes" : "No";
    }

    echo "<tr>
            <td>$label</td>
            <td>$val</td>
          </tr> ";
  }
  echo "</table>";
}
$studentsDetails = [
  [
    "name" => "John Doe",
    "age" => 25,
    "city" => "New York",
    "occupation" => "Web Developer",
    "is_student" => false
  ],
  [
    "name" => "Jane Smith",
    "age" => 30,
    "city" => "Los Angeles",
    "occupation" => "Graphic Designer",
    "is_student" => true
  ],
  [
    "name" => "Bob Johnson",
    "age" => 28,
    "city" => "Chicago",
    "occupation" => "Software Engineer",
    "is_student" => false
  ]
];
//questo medoto era un casiso da fare; provo a spiegare riga per riga
function multiStudTable($students){
  //essendo che sono varie array da compilare allora ho deciso di mettere un messagio se per caso non mettiamo dati/array
  if (empty($students)) {
    echo "<p>No detail Available</p>";
  }
  //ahh il inizio a della tortura, le codici come posso mettere in html
  echo "<h2>Student List</h2>";
  echo "<table>
          <thead>
            <tr>";
  // Ho pensato se ci sono varie array allora...
  $columns = array_keys($students[0]);
  foreach($columns as $col){
    echo "<th>" . ucfirst(str_replace("_", " ", $col)) . "</th>";
  } 
  echo "    </tr>
          </thead>
          <tbody>";
  foreach ($students as $student){
    echo "  <tr>";
    foreach($columns as $col){
      $val = $student[$col];
      if(is_bool($val)){
        $val = $val? "Yes" : "No";
      }
      echo "<td>$val</td>";
    }
    echo "  </tr>";
  }
  echo "  </tbody>
        </table>";
}

$films = [
  "Action" => ["Die Hard", "Mad Max: Fury Road", "The Dark Knight"],
  "Comedy" => ["Anchorman", "Superbad", "Bridesmaids"],
  "Drama" => ["The Shawshank Redemption", "The Godfather", "Forrest Gump"],
  "Science Fiction" => ["Blade Runner", "The Matrix", "Star Wars"],
  "Animation" => ["Toy Story", "Finding Nemo", "Frozen"]
];

$selected = $_GET['films'] ?? null;

$filmDetails = [
  "Action" => [
    ["title" => "Die Hard", "director" => "John McTiernan", "year" => 1988],
    ["title" => "Mad Max: Fury Road", "director" => "George Miller", "year" => 2015],
    ["title" => "The Dark Knight", "director" => "Christopher Nolan", "year" => 2008],
  ],
  "Comedy" => [
    ["title" => "Anchorman", "director" => "Adam McKay", "year" => 2004],
    ["title" => "Superbad", "director" => "Greg Mottola", "year" => 2007],
    ["title" => "Bridesmaids", "director" => "Paul Feig", "year" => 2011],
  ],
  "Drama" => [
    ["title" => "The Shawshank Redemption", "director" => "Frank Darabont", "year" => 1994],
    ["title" => "The Godfather", "director" => "Francis Ford Coppola", "year" => 1972],
    ["title" => "Forrest Gump", "director" => "Robert Zemeckis", "year" => 1994],
  ],
  "Science Fiction" => [
    ["title" => "Blade Runner", "director" => "Ridley Scott", "year" => 1982],
    ["title" => "The Matrix", "director" => "The Wachowskis", "year" => 1999],
    ["title" => "Star Wars", "director" => "George Lucas", "year" => 1977],
  ],
  "Animation" => [
    ["title" => "Toy Story", "director" => "John Lasseter", "year" => 1995],
    ["title" => "Finding Nemo", "director" => "Andrew Stanton", "year" => 2003],
    ["title" => "Frozen", "director" => "Chris Buck, Jennifer Lee", "year" => 2013],
  ]
  
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page title</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Fruit List</h1>
  <?php 
  fruitList($listfruit);
  translate($translation);
  oneStudTable($studentDetails);
  multiStudTable($studentsDetails);
  ?>
  <!--
  per il quinto esercizio ho deciso di fare non fare un funzione ma qualcosa un po simile che ho fatto in Angular
   -->
  <h2>Films from different Genres</h2>
  <form>
    <select name="films" onchange="this.form.submit()">
      <option selected disabled>Select a Genre</option>
      <?php 
      foreach ($films as $genre=> $film):
        $isSelected = ($genre === $selected) ? 'selected' : '';
        echo "<option value='$genre' $isSelected>$genre</option>";
      endforeach;
      ?>
    </select>
  </form>

  <hr>

  <?php 
  if ($selected && array_key_exists($selected, $films)){
    echo "<h3>Films in $selected genre are: </h3>";
    echo "<ul>";
    foreach($films[$selected] as $movies):
      echo "<li>$movies</li>";
    endforeach;
    echo "</ul>";
  }
  ?>
  <script src="script.js"></script>
</body>

</html>