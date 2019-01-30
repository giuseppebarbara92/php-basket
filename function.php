<?php

function getPlayerCode()
{
$playerCode = '';
$alfabeto = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numberPositions = strlen($alfabeto) - 1;

for ($i=0; $i < 3 ; $i++) {
  $playerCode .= $alfabeto[rand(0, $numberPositions)];
}

for ($i=0; $i < 3 ; $i++) {
  $playerCode .= rand(0, 9);
}

return $playerCode;
}



 ?>
