<?php

include_once("Person.php");

$person = new Person('John',30);
echo"<pre>";
var_dump($person);
echo "<br>";
echo 'Persoana se numeste '.$person->nume;
echo "<br>";
echo 'Aceasta persoana are varsta de '.$person->varsta;
echo "<br>";
echo $person->detalii();

?>