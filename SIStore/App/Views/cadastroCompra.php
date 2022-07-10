<?php 
    use App\Core\PDOFactory;
    use App\Models\ProdutoDAO;
    use App\Models\FornecedorDAO;
    $rota = '/cadastraCompra';
    
    $produtoDAO = new ProdutoDAO(); 

    $produtos = $produtoDAO->buscarProdutos();
    
    $fornecedorDAO = new FornecedorDAO();
    
    $fornecedores = $fornecedorDAO->buscarFornecedores();

    

    session_start();
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Compra</title>
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

      <form action="<?= URL_BASE . $rota ?>" method="post">



        <div class="col-6">
            <div class="form-group">
              <label for="qtd">Quantidade</label>
              <input id="qtd" class="form-control" type="text" name="quantidade_compra" value= " "placeholder="">
             </div>


             <div class="form-group">
              <label for="data">Data da Compra</label>
              <input id="data" class="form-control" type="date" name="data_compra" value= " "placeholder="">
             </div>

             
             <div class="form-group">
              <label for="valor">Valor</label>
              <input id="valor" class="form-control" type="text" name="valor_compra" value= " "placeholder="">
             </div>

          
            
             <label for="produtos">Produto</label>
           
            
            <select name="id_produto" id="id_produto">
            <optgroup label="Selecione Produto">
            <option></option> 
            <?php foreach ($produtos as $produto){ ?>
            <option value="<?= $produto['id']?>" name="id_produto"><?= $produto['nome_produto']?></option>
            <?php }?>
            </select>
            
            <label for="fornecedor">Fornecedor</label>   

            <select name="id_fornecedor" id="id_fornecedor">
            <optgroup label="Selecione Fornecedor">
            <option></option> 
            <?php foreach($fornecedores as $fornecedor) { ?>
            <option value="<?= $fornecedor['id']?>" name="id_fornecedor"><?= $fornecedor['razao_social']?></option>
            <?php }?>
            </select>
          
            
            <input id="id" class="form-control" type="hidden" name="id_funcionario" value="<?= $_SESSION['id']?>">  
         
          


          <div class="form-group">
            <button type="submit" class="btn btn-primary">Comprar</button>
          </div>

        </div>
      </form>

    </div>

  </div>

  <script src="<?=url("public/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= url("public/js/jquery.mask.min.js") ?>"></script>
<script src="<?= url("/public/js/popper.min.js"); ?>"></script>
<script src="<?= url("/public/js/bootstrap.min.js"); ?>"></script>
</body>
</html>