<?php
session_start();
$hrefLogin = '/public/pages/admin/form_login.php';
if(isset($_SESSION['logado'])) {
  $hrefLogin = '/public/pages/admin/deslogar.php';
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cardapio Web</a>
    <button class="btn btn-outline-success">
      <a href="<?= $hrefLogin ?>" class="navbar-text" style="text-decoration:none;">Logar</a>
    </button>
  </div>
</nav>