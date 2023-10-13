<?php

include_once('Person.php');

$student = new Student('Alice',35);

echo $student->Info('Alice',35);
echo "<br>";
echo $student->detali();
?>