<?php
//élément à charger avant la lecture du script

require_once 'config.php';
require_once 'lib/pdo.php';

$connect= connect();
var_dump($connect);

//inclure les pages pour qu'elles soient generée àpd index.
@include_once 'page/header.html';
@include_once 'page/menu.html';
@include_once 'page/footer.html';