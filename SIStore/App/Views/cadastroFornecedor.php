<?php 
    use App\Core\PDOFactory;
    $rota = '/cadastraFornecedor';
    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
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
            <label for="razao">Razão Social</label>
            <input id="razao" class="form-control" type="text" name="razao_social" value= " "placeholder="">
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input id="cnpj" class="form-control" type="text" name="cnpj" value= " " placeholder="111.222.333-00">
          </div>
          <div class="form-group">
            <label for="endereco">Endereço</label>
            <input id="endereco" class="form-control" type="text" name="endereco" value= " " placeholder="">
          </div>
          <div class="form-group">
            <label for="bairro">Bairro</label>
            <input id="bairro" class="form-control" type="text" name="bairro" value=" " placeholder="">
          </div>
          <div class="form-group">
            <label for="cidade">Cidade</label>
            <input id="cidade" class="form-control" type="text" name="cidade" value=" " placeholder="">
          </div>
          <div class="form-group">
            <label for="uf">UF</label>
            <input id="uf" class="form-control" type="text" name="uf" value=" " placeholder="">
          </div>
          <div class="form-group">
            <label for="cep">CEP</label>
            <input id="cep" class="form-control" type="text" name="cep" value=" " placeholder="">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input id="telelone" class="form-control" type="text" name="telefone" value=" " placeholder="(00) 0000-0000">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="email" name="email" value=" " placeholder="">
          </div>  
          
            <input id="id" class="form-control" type="hidden" name="id" value=" ">
         
          


          <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
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