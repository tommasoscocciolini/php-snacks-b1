<?php
$posts = [
    '12/01/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/05/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '12/05/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<?= '12/01/2021' . '<br>';  ?>
<?php for($i=0; $i < count($posts['12/01/2021']); $i++) {
  // code...
  echo $posts['12/01/2021'][$i]['title'] . '<br>';
  echo $posts['12/01/2021'][$i]['author'] . '<br>';
  echo $posts['12/01/2021'][$i]['text'] . '<br>';
  echo "<br>";
}
?>
<?= '10/05/2021' . '<br>';  ?>
<?php for($i=0; $i < count($posts['10/05/2021']); $i++) {
  // code...
  echo $posts['10/05/2021'][$i]['title'] . '<br>';
  echo $posts['10/05/2021'][$i]['author'] . '<br>';
  echo $posts['10/05/2021'][$i]['text'] . '<br>';
  echo "<br>";
}
?>
<?= '12/05/2021' . '<br>';  ?>
<?php for($i=0; $i < count($posts['12/05/2021']); $i++) {
  // code...
  echo $posts['12/05/2021'][$i]['title'] . '<br>';
  echo $posts['12/05/2021'][$i]['author'] . '<br>';
  echo $posts['12/05/2021'][$i]['text'] . '<br>';
  echo "<br>";
}
?>
