<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="<?= url("/public/css/bootstrap.min.css"); ?>" />
  <title>Login</title>
</head>

<body>
  <header class="header">
    <div class="container mt-3 mb-3">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="<?= URL_BASE . "/" ?>">Página Inicial</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <div class="formbox">

      <form action="<?= URL_BASE . '/logar' ?>" method="post">



        <div class="col-6">
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input id="cpf" class="form-control" type="text" name="cpf" placeholder="111.222.333-00">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input id="senha" class="form-control" type="password" name="senha" placeholder="123">
          </div>

          <div class="form-group">
            <fieldset>Função</fieldset>
            <label for="administrador">Administrador</label>
            <input id="administrador" class="form-control" type="radio" value="0" name="papel">
            <label for="comprador">Comprador</label>
            -<input id="comprador" class="form-control" type="radio" value="2" name="papel">
            <label for="vendedor">Vendedor</label>
            <input id="vendendor" class="form-control" type="radio" value="1" name="papel">
          </div>




          <div class="form-group">
            <button type="submit" class="btn btn-primary">Logar</button>
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