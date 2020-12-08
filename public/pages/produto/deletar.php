<?php

use App\Model\Cardapio;
require_once __DIR__.'/../../../vendor/autoload.php';

session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$cardapio = new Cardapio();

if(isset($_SESSION['cardapio']) and isset($id))
{
    $cardapio = unserialize($_SESSION['cardapio']);

    $cardapio->removerProdutoPorId($id);

    $_SESSION['cardapio'] = serialize($cardapio);
}

header('Location: /public/pages/');
die();