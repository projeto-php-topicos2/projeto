
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
<header class="header">
    <div class="container mt-3 mb-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE . "/indexcomprador" ?>">Home</a></li>
            </ul>
        </nav>
    </div>
</header>
    
<div class="container">
    <div class="formbox">

      <p>Tipo de Compra</p>
      <div  style="padding: 10px"><a href="<?= URL_BASE.'/formularioProduto' ?>" title="Faz uma nova compra e registra um novo produto no estoque">Novo Produto </a></div>
      <div  style="padding: 10px"><a href="<?= URL_BASE.'/formularioCompra' ?>" title="Faz uma compra de um produto já existente no estoque">Produto Estocado </a></div>

  </div>
</div>
  <script src="<?=url("public/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= url("public/js/jquery.mask.min.js") ?>"></script>
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>
</body>
</html>