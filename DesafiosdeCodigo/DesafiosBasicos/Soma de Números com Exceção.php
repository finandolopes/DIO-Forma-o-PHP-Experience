<?php

$num = intval(fgets(STDIN));

$soma = 0;



for ($i = 1; $i <= $num; $i++) {

if ($i % 3 != 0) {

$soma += $i;

}

}

echo "Soma dos números de 1 a $num, exceto os divisíveis por 3: $soma";

?>

