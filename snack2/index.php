<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
?>

<?php
$resEmail = filter_var($mail, FILTER_VALIDATE_EMAIL);
var_dump($name);
var_dump($mail);
var_dump($age);
?>

<?php if (strlen($name) > 3 && $resEmail && is_numeric($age)): ?>

<div class="">“Accesso riuscito”</div>

<?php else: ?>

<div class="">“Accesso negato”</div>

<?php endif; ?>
