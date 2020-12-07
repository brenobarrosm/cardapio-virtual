<?php include_once __DIR__ . '/../../includes/cabecalho.php'; ?>

<form action="/public/pages/produto/salvar.php" method="POST">
    <div>
    <input type="text" id="inputNome" placeholder="Nome do produto">
    <label for="inputNome">Nome</label>
    </div>
    <div>
    <input type="text" id="inputDescricao" placeholder="Insira uma descricao">
    <label for="inputDescricao">Descricao</label>
    </div>
    <div>
    <input type="number" id="inputPreco" placeholder="Insira o preco">
    <label for="inputPreco">Preco</label>
    </div>
    <button type="submit">Entrar</button>
</form>

<?php include_once __DIR__ . '/../../includes/cabecalho.php'; ?>