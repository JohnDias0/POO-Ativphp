<?php
include_once __DIR__ . "/../vendor/autoload.php";
use App\Model\Pessoa;

$p1 = new Pessoa('Jonathan');
$p2 = new Pessoa('Iguinho');    

echo("<h3>Olá, meu nome é {$p1->get_name()}");
echo("<h3>Olá, meu nome é {$p2->get_name()}")
?>