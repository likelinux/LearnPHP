<?php

$n1=10;
$n2=20;

function add($c1, $c2)
{
	echo $c1 + $c2;
}

@add($n1,$n2);
echo "<br>";
function familyName($fname,$year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>
