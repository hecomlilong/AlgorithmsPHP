<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2017/4/1
 * Time: 09:25
 */
require_once "utils/dique.php";
use utils\dique;

$dique = new dique();

$dique->lpush('first');
$dique->lpush('second');
$dique->rpush('ddff');
$dique->rpush('adfa');
print_r($dique->getAll());

print_r($dique->lpop());
print_r($dique->rpop());
print_r($dique->getAll());