<?php
print"primeiro numero:\n";
$var1 = (int) fgets(STDIN);
print"segundo numero:\n";
$var2 = (int) fgets(STDIN);
print"terceiro numero:\n";
$var3 = (int) fgets(STDIN);
print"quarto numero:\n";
$var4 = (int) fgets(STDIN);
print"quinto numero:\n";
$var5 = (int) fgets(STDIN);
$soma = $var1 + $var2 + $var3 + $var4 + $var5;
print"$soma\n";
$media = $soma / 5;
print"$media\n";
