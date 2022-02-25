<?php
/*
 * Esse arquivo é responsável apenas para conseguir executar algumas classes caso queira ver no terminal!
 *
 */
require '../vendor/autoload.php';

$app = new App\Desafio002\app\App();

$return = $app->index();

var_dump($return);