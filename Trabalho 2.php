<?php

fgets(STDIN)
num=int( input('Digite um numero: ') )

if num > 0 :
    print('Positivo')
else:
    if num == 0 :
        print('Nem positivo nem negativo, é 0')
    else:
        print('Negativo')
