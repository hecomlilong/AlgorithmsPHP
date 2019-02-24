<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2017/4/1
 * Time: 09:25
 */
require_once "autoload.php";
use utils\dique;
$test = new set();
$test->add(1);
$test->add(3);
$test->add(2);
var_dump($test->get());
// $dique = new dique();

// $dique->lpush('first');
// $dique->lpush('second');
// $dique->rpush('ddff');
// $dique->rpush('adfa');
// print_r($dique->getAll());

// print_r($dique->lpop());
// print_r($dique->rpop());
// print_r($dique->getAll());