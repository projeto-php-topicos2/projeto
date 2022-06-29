

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Vendedor</title>
</head>
<body>
<header class="header">
    <div class="container mt-3 mb-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/listarVendas' ?>">Listar Vendas</a></li>
               <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/listarClientes2' ?>">Realizar Venda</a></li>
                <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE.'/listarClientes' ?>">Listar Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE.'/cadastrarCliente' ?>">Cadastrar Cliente</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container">

            <main>
            <div class="container mt-3">
                <p>CPF: ${individuoLogado.CPF}</p>
                <p>Nome: ${individuoLogado.nome}</p>

                <a style="color:white" href="<?= URL_BASE.'/logout' ?>"><button class="btn btn-primary">Sair</button></a>
            </div>
            </main>  
   
</main>


<!--<script src="/frontend/src/scripts/jquery-3.4.1.min.js"></script>
<script src="/frontend/src/scripts/jquery.mask.min.js"></script>-->
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>

</body>
</html>