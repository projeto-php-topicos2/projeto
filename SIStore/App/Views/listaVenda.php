<?php
 
 use App\Core\PDOFactory;
 
 $aux=0;
 $pessoas = null;

 try{
    
        $pdo = new PDOFactory();
        $con = $pdo->getConexao();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $query = $con->query("SELECT id,valor_venda,data_venda FROM vendas");

        

        $con = null;
 } catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
 }
 

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("/public/css/bootstrap.min.css"); ?>" />
    <title>Listagem de Vendas</title>
</head>
<body>
<header class="header">
    <div class="container mt-3 mb-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE . "/indexvendedor" ?>">Home</a></li>
            </ul>
        </nav>
    </div>
</header>
    
<main class="container mt-3">
            <table class="table">
                <thead class="thead-light">
                    <?php
                    
                    while($linha = $query->fetch(PDO::FETCH_ASSOC)){

                    ?>

                    <tr> 
                        <th scope="col"><b>Venda</b></th>
                        <th scope="col"><b>Valor</b><th>       
                        <th scope="col"><b>Data</b><th>
                        
                    </tr>  
                    
                    <tr>
                        <td> <?php  echo $linha['id'];  ?></td>
                        <td><?php echo $linha['valor_venda'];  ?></td>
                        <td></td>
                        <td><?php echo $linha['data_venda'];  }?></td>
                        
                    </tr>

                       
                    
                    
                </thead>
            </table>
        </main>

  <script src="<?=url("public/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= url("public/js/jquery.mask.min.js") ?>"></script>
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>
</body>
</html>