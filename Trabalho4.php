<?php
print"digite uma letra:";
$letter = fgets(STDIN);
if($letter == "a" or $letter == "e" or $letter == "i" or $letter == "o" or $letter == "u"){
    print"a letra $letter é vogal";
}
elseif($letter == "b" or $letter == "c" or $letter == "d" or $letter == "f" or $letter == "g" or $letter == "h" or $letter == "j" or $letter == "k" or $letter == "l" or $letter == "m" or $letter == "n" or $letter == "p" or $letter == "q" or $letter == "r" or $letter == "s" or $letter == "t" or $letter == "v" or $letter == "w" or $letter == "x" or $letter == "y" or $letter == "z"){
    print"a letra $letter é consoante";
}
else{
    print"isso nao foi o que eu pedi ;-;";
}
