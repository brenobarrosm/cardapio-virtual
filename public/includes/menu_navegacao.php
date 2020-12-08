<?php
session_start();
$hrefLogin = '/public/pages/admin/form_login.php';
if(isset($_SESSION['logado'])) {
  $hrefLogin = '/public/pages/admin/deslogar.php';
}

?>

<nav>
  <div>
  <a class="navbar-brand" href="#">Cardapio Web</a>
  <a href="<?= $hrefLogin ?>">icone</a>
  </div>
</nav>