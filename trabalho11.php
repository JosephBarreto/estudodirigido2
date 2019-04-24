<?php
print"digite um numero entre 0 e 1000";
$num = (int) fgets(STDIN);
$centenas  = floor($num / 100);
$dezenas = floor(($num%100) / 10);
$unidades = floor((($num%100)%10));
print"$centenas centenas, $dezenas dezenas e $unidades unidades";