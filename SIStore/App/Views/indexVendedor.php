

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Dashboard-Vendedor</title>
</head>
<body>
<header class="header">
    <div class="container mt-3 mb-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="">Nome</a></li>
                <li class="nav-item"><a class="nav-link" href="">Cadastrar Cliente</a></li>
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