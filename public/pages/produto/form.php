<?php

use App\Model\Cardapio;
use App\Model\Produto;

include_once __DIR__ . '/../../includes/cabecalho.php';
include_once __DIR__ . '/../../includes/menu_navegacao.php';
include_once __DIR__.'/../../../vendor/autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$cardapio = new Cardapio();

if(isset($id) and isset($_SESSION['cardapio']))
{
    $cardapio = unserialize($_SESSION['cardapio']);
    $produto = new Produto();
    $produto = $cardapio->getProdutoPorId($id);
}

?>
<main>

    <form action="/public/pages/produto/salvar.php" method="POST">
        <div>
        <input type="text" id="inputNome" placeholder="Nome do produto" name="nome" value="<?= isset($produto)? $produto->getNome():'' ?>">
        <label for="inputNome">Nome</label>
        </div>
        <div>
        <input type="text" id="inputDescricao" placeholder="Insira uma descricao" name="descricao" value="<?= isset($produto)? $produto->getDescricao():'' ?>">
        <label for="inputDescricao">Descricao</label>
        </div>
        <div>
        <input type="number" id="inputPreco" placeholder="Insira o preco" name="preco" value="<?= isset($produto)? $produto->getPreco():'' ?>">
        <label for="inputPreco">Preco</label>
        </div>
        <button type="submit">Salvar</button>
    </form>

</main>



<?php include_once __DIR__ . '/../../includes/cabecalho.php'; ?>