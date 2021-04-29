<?php
$classe = [
    'Pino Pineta' => [
        [
            'nome' => 'Pino',
            'cognome' => 'Pineta',
            'voti' => [ 5, 8, 4, 9, 6, 6, 7],
        ],
    ],
    'Mario Rossi' => [
        [
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'voti' => [ 6, 7, 8, 9, 5, 3, 5, 8],
        ],
    ],
    'Tommaso Scocciolini' => [
        [
            'nome' => 'Tommaso',
            'cognome' => 'Scocciolini',
            'voti' => [7, 7, 3, 5, 8, 4, 8],
        ],
    ],
];
?>

<?php //var_dump($classe)
  echo ($classe['Pino Pineta'][0]['nome']) . '<br>';
  echo ($classe['Pino Pineta'][0]['cognome']) . '<br>';
  $mediaPino = 0;
  for ($i=0; $i < count($classe['Pino Pineta'][0]['voti']); $i++) {
    // code...
    $mediaPino += $classe['Pino Pineta'][0]['voti'][$i];
  }
  $mediaPino = $mediaPino / count($classe['Pino Pineta'][0]['voti']);
  echo "Media = " . round($mediaPino, 2) . '<br><br>';
 ?>

 <?php //var_dump($classe)
   echo ($classe['Mario Rossi'][0]['nome']) . '<br>';
   echo ($classe['Mario Rossi'][0]['cognome']) . '<br>';
   $mediaMario = 0;
   for ($i=0; $i < count($classe['Mario Rossi'][0]['voti']); $i++) {
     // code...
     $mediaMario += $classe['Mario Rossi'][0]['voti'][$i];
   }
   $mediaMario = $mediaMario / count($classe['Mario Rossi'][0]['voti']);
   echo "Media = " . round($mediaMario, 2) . '<br><br>';
  ?>

  <?php //var_dump($classe)
    echo ($classe['Tommaso Scocciolini'][0]['nome']) . '<br>';
    echo ($classe['Tommaso Scocciolini'][0]['cognome']) . '<br>';
    $mediaTom = 0;
    for ($i=0; $i < count($classe['Tommaso Scocciolini'][0]['voti']); $i++) {
      // code...
      $mediaTom += $classe['Tommaso Scocciolini'][0]['voti'][$i];
    }
    $mediaTom = $mediaTom / count($classe['Tommaso Scocciolini'][0]['voti']);
    echo "Media = " . round($mediaTom, 2) . '<br>';
   ?>
