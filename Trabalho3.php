<?php
print "Digite um sexo(F ou M):";
$sex = fgets(STDIN);

if ($sex = "F") {
    print"F - feminino";
}
elseif ($sex = "M") {
    print"M - masculino";
}
else {
    Print"Sexo invalido";
}
