

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("/public/css/bootstrap.min.css"); ?>" />
    <title>Dashboard-Comprador</title>
</head>
<body>
<header class="header">
    <div class="container mt-3 mb-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/' ?>">Listar Produtos</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/compra' ?>">Comprar</a></li>
                <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/listarFornecedores' ?>">Listar Fornecedores</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE.'/formularioFornecedor' ?>">Cadastrar Fornecedor</a></li>
                <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/listarCategorias' ?>">Listar Categorias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE.'/formularioCategoria' ?>">Cadastrar Categoria</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container">

            <main>
            <div class="container mt-3">
                <p>Comprador: <?php echo $_SESSION['nome']?></p>

                <a style="color:white" href="<?= URL_BASE.'/logout' ?>"><button class="btn btn-primary">Sair</button></a>
            </div>
            </main>  
   
</main>


<script src="<?=url("public/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= url("public/js/jquery.mask.min.js") ?>"></script>
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>

</body>
</html>