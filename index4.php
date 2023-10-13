<?php

include_once("Calculator.php");
$calc = new Calculator(3,4);
echo "<p>3 + 4 = ".$calc->add(). "</p>";

$calc = new Calculator (15,12);
echo "<p>15 - 12 = ".$calc->subtract(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 * 2 = ".$calc->multiply(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 / 2 = ".$calc ->divide(). "</p>";
?>