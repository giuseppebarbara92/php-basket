<?php


include 'function.php';

$players = [];
$playerCodes = [];

for ($i= 0; $i  < 10; $i++) {
  // $codiceGiocatore = getPlayerCode();
  // if (!in_array($codiceGiocatore, $playerCodes)) {
  //     $playerCodes[] = $codiceGiocatore;
  // }


  $players[] = [
    'codiceGiocatore' => getPlayerCode(),
    'punti' => rand(0, 90),
    'rimbalzi' => rand(0, 20),
    'falli' => rand(0, 20),
    '2punti' => rand(0, 100),


  ];
}

// SECONDO METODO JS

    echo json_encode($players);

 ?>
