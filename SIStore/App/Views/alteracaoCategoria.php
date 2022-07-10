<?php 
    use App\Core\PDOFactory;

     $registro = null;
    if(isset($data)){

      $id = $data['id'] ;
      
      $rota = '/alteraCategoria';

      try{
        $pdo = new PDOFactory();
        $con = $pdo->getConexao();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $query = $con->query("SELECT * FROM categorias WHERE id = $id");

        $registro = $query->fetch(PDO::FETCH_ASSOC);

        

        $con = null;
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }  
    }

  
    
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
            <label for="nome">Categoria</label>
            <input id="nome" class="form-control" type="text" name="nome_categoria" value= "<?=  $registro['nome_categoria'] ?>"placeholder="">
          </div>
          
          
            <input id="id" class="form-control" type="hidden" name="id" value="<?= $registro['id'] ?>">
         
          


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