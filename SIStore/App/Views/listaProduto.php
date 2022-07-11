<?php
 
 use App\Core\PDOFactory;
 use App\Models\ProdutoDAO;
 
 $aux=0;
 $pessoas = null;

 try{
    
        $pdo = new PDOFactory();
        $con = $pdo->getConexao();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $query = $con->query("SELECT id,nome_produto,liberado_venda FROM produtos");

        

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
    <title>Listagem de Produtos</title>
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
    
<main class="container mt-3">
        <form action="./liberaVenda" method="post">

            <table class="table">
                <thead class="thead-light">
                    

                    <tr> 
                        <th scope="col"><b>Produto</b></th>
                        <th scope="col"><b>Liberado Venda</b><th>
                        <th scope="col"><b> Selecionar </b><th>
                        
                    </tr>  

                    <?php
                    
                    while($linha = $query->fetch(PDO::FETCH_ASSOC)){

                    ?>
                    
                    <tr>
                        <td> <?php  echo $linha['nome_produto'];  ?></td>
                        <td class="condicao"><?php  echo $linha['liberado_venda'];  ?></td>
                        <td><input type="radio" name="id" value="<?= $linha['id'] ?>"></td>
                        
                        <td><?php } ?><a></a> </td>
                    </tr>
                    
                    
                       
                    
                    
                </thead>
            </table>
            <input type="submit"class="btn btn-secondary btn-lg" value="Mudar">
            </form>
        </main>

<script src="<?=url("public/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= url("public/js/jquery.mask.min.js") ?>"></script>
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>

<script>


const texto = document.getElementsByClassName("condicao")

const collection = document.getElementsByClassName("Venda");

console.log(texto)

if(texto === "S"){
    for (let i = 0; i < collection.length; i++) {
     collection[i].style.backgroundColor = "red";
}
} else {
    for (let i = 0; i < collection.length; i++) {
     collection[i].style.backgroundColor = "green";
}
}

$('#Venda').button('toggle')
</script>

</body>
</html>