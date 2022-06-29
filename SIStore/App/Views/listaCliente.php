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
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE . "/indexVendedor" ?>">Home</a></li>
            </ul>
        </nav>
    </div>
</header>
    
<main class="container mt-3">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"><b>Nome</b></th>
                        <th scope="col"><b>CPF</b><th>
                        <th scope="col"><b> </b><th>
                        <th scope="col"><b> </b><th>
                    </tr>  
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="">Alterar</a></td>
                        <td><a href="">Remover</a></td>
                        <td><a></a>
                    </tr>

                       
                    }
                    
                </thead>
            </table>
        </main>

  <script src="<?=url("public/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= url("public/js/jquery.mask.min.js") ?>"></script>
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>
</body>
</html>