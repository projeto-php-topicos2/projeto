<?php 
 session_start();
 $rota =null;
 
 if($_SESSION['id'] == '1'){
   $rota = '/indexvendedor';
 } 

 if($_SESSION['id'] == '2' ){
    $rota = '/indexcomprador';
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="<?= url("/public/css/bootstrap.min.css"); ?>"/>
    <title>Sucesso</title>
</head>
<body>
<header class="header">
    <div class="container mt-3 mb-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= URL_BASE . $rota ?>">Voltar</a></li>
                
            </ul>
        </nav>
    </div>
</header>
<main class="container">
    <h1>Sucesso do cadastro !</h1>

    
   
</main>


<!--<script src="/frontend/src/scripts/jquery-3.4.1.min.js"></script>
<script src="/frontend/src/scripts/jquery.mask.min.js"></script>-->
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>

</body>
</html>