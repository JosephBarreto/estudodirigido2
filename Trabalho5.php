<?php
print "Digite a 1º nota:";
$grade1 = (int) fgets(STDIN);
print "Digite o 2º nota:";
$grade2 = (int) fgets(STDIN);

$media = ($grade1 + $grade2) / 2;

if ($media >= 7 and $media < 10){     
    print "Você foi Aprovado!!\n"; 
}
elseif ($media < 7){
    print "REPROVADO!!!\n -seu madruga\n";
}
elseif ($media == 10){
    print "Você foi Aprovado com Distinção!!\n";
}
else{
    print "hackeou o sigga foi?\n";
}
