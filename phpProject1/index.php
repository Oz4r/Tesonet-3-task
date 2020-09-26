<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<h1>PHP Tesonet Rookie exam</h1>
<p>Part #3</p>

<form action="index.php" method="get">
Enter the date in YYYY/MM/DD format: <input type="text" name="Born"><br>
<input type="submit" onsubmit=>
</form>


<?php
class Person {
  public $born;

  function __construct($born) {
    //TODO
    // ADD validations of data entered
    $this->born = $born;
  }
  function get_yearBorn() {
    return $this->born;
  }

  function calculateLife(){
    //TODO 
    //Improve algorythm
    $bday = new DateTime(date($this->get_yearBorn()));
    $today = new DateTime(date('Y-m-d'));
    $diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf("\n");
  }
}

$person = new Person($_GET['Born']);
echo $person->calculateLife($_GET["Born"]);
?>

</body>
</html>