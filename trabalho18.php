<?php
$cont = 0;
$contpar = 0;
$contimpar = 0;
while($cont<=10){
$cont = $cont +1;
print"numero inteiro pfvr
";
$var = (int) fgets(STDIN);
if($var % 2 == 0){
$contpar = $contpar + 1;
}else{
$contimpar = $contimpar + 1;
}}
print"n de impares = $contimpar";
print"n de par = $cont";
