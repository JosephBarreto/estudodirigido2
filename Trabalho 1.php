<?php

$n1 = 2300;
$n2 = 5000;
$n3 = 8000;


print "Digite três números:";   
$ordem = array($n1,$n2,$n3);
sort($ordem); 
foreach ($ordem as $l ) 
{ print "$l "; } 

$maior = ($n1 > $n2)?$n1: $n2; 
$maior = ($maior > $n3)? $maior: $n3;

print "O maior numero é de mais de $maior";