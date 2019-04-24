<?php
print"digite base:\n";
$base = (int) fgets(STDIN);
print"digite expoente:\n";
$expoente = (int) fgets(STDIN);
$potencia = $base ** $expoente;
print"resultado = $potencia:\n";
print"$base^$expoente";
?>