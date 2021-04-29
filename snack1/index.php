<?php
  $giornataX = [
    [
      'casa' => 'Cantù',
      'punti_casa' => rand(50, 120),
      'ospite' => 'Milano',
      'punti_ospite' => rand(50, 120),
    ],
    [
      'casa' => 'Bari',
      'punti_casa' => rand(50, 120),
      'ospite' => 'Perugia',
      'punti_ospite' => rand(50, 120),
    ],
    [
      'casa' => 'Siena',
      'punti_casa' => rand(50, 120),
      'ospite' => 'Pescara',
      'punti_ospite' => rand(50, 120),
    ],
  ];

//var_dump($giornataX);

for ($i=0; $i < count($giornataX); $i++) { ?>
  <div class="">
    <?= $giornataX[$i]['casa'] ?> -
    <?= $giornataX[$i]['ospite'] ?> |
    <?= $giornataX[$i]['punti_casa'] ?> -
    <?= $giornataX[$i]['punti_ospite'] ?>
  </div>
<?php } ?>
