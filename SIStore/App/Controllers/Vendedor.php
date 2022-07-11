<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Core\PDOFactory;
use App\Models\ProdutoDAO;
use PDO;
use PDOException;

class Vendedor extends BaseController
{
    

    public function indexVendedor()
    {
        // instanciar o model
        // $this->model método herdado de BaseController

       /* 
        $artigoModel = $this->model("Produtos");

        $artigos = $artigoModel->read()->fetchAll(\PDO::FETCH_ASSOC);

        $data = ['artigos' => $artigos];

        $this->view('home/index', $data);

        */
        
    if(!isset($_SESSION)){
        session_start();
    }


    if (!(isset($_SESSION['id']) && isset($_SESSION['nome']))) {
        header("Location:".URL_BASE."/");
    } else {
        require_once 'App/Views/indexVendedor.php';

    }



    }

    public function exibirFormCliente(){
        require_once 'App/Views/cadastroCliente.php';
    }

    public function alteraFormCliente($data){
        
     
        $_GET['id'] = $data['id'];
        var_dump($_GET['id']);

        require_once 'App/Views/alteracaoCliente.php';
    }

    public function alteraCliente(){
        
     
        
        $id = $_POST['id'];
        $nome = $_POST['nomeCliente'];
         $cpf = $_POST['cpf'];
         $endereco = $_POST['endereco'];
         $bairro = $_POST['bairro'];
         $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
         $cep = $_POST['cep'];
         $telefone = $_POST['telefone'];
         $email = $_POST['email'];

        try{

            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $con->prepare('UPDATE clientes SET nome = ? , cpf = ?, endereco = ?, 
            bairro = ?, cidade = ?, uf= ?, cep = ?, telefone = ?, email = ? WHERE id = ?');

            $stmt->bindValue(1,$nome);
            $stmt->bindValue(2,$cpf);
            $stmt->bindValue(3,$endereco);
            $stmt->bindValue(4,$bairro);
            $stmt->bindValue(5,$cidade);
            $stmt->bindValue(6,$uf);
            $stmt->bindValue(7,$cep);
            $stmt->bindValue(8,$telefone);
            $stmt->bindValue(9,$email); 
            $stmt->bindValue(10,$id);  

            $stmt->execute();

            $con = null;

            header("Location: http://localhost/projeto_SIStore/SIStore/sucessoAlteracao");
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        require_once 'App/Views/cadastroCliente.php';
    }

    public function cadastrarCliente(){
     
        

            $nome = $_POST['nomeCliente'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $cep = $_POST['cep'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            try{
                $pdo = new PDOFactory();
                $con = $pdo->getConexao();
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               

                $stmt = $con->prepare("INSERT INTO clientes (nome,cpf,endereco,bairro
                ,cidade,uf,cep,telefone,email) VALUES (?,?,?,?,?,?,?,?,?)");
                
                
                $stmt->bindValue(1,$nome);
                $stmt->bindValue(2,$cpf);
                $stmt->bindValue(3,$endereco);
                $stmt->bindValue(4,$bairro);
                $stmt->bindValue(5,$cidade);
                $stmt->bindValue(6,$uf);
                $stmt->bindValue(7,$cep);
                $stmt->bindValue(8,$telefone);
                $stmt->bindValue(9,$email);

                $stmt->execute();

                $con = null;

                header("Location: http://localhost/projeto_SIStore/SIStore/sucessoCadastro");

            } catch (PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }            


                }


     public function removerCliente($data){

        $_GET['id'] = $data['id'];

        try {
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $stmt = $con->prepare('DELETE FROM clientes WHERE id = ?');
            $stmt->bindValue(1, $_GET['id']);
            $stmt->execute();

            $con=null;
          
            header("Location: http://localhost/projeto_SIStore/SIStore/listarClientes");
          } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }
     } 
     
     public function alterarCliente(){

    } 

     public function listarClientes(){
      require_once 'App/Views/listaCliente.php';

     }


     public function exibirFormVenda(){
        require_once 'App/Views/cadastroVenda.php';
     }

     public function cadastrarVenda(){

        
        $idProduto = $_POST['id_produto'];
        $idCliente = $_POST['id_cliente'];
        $qtd = $_POST['quantidade_venda'];
        $data = $_POST['data_venda'];
        $valor = $_POST['valor_venda'];
        $idFuncionario = $_POST['id_funcionario'];
            
        $produtoDAO = new ProdutoDAO();
        $produto = $produtoDAO->buscarProduto($idProduto);

        if($produto[0]['quantidade_disponível'] == '0' || $produto[0]['liberado_venda'] == 'N' ){
            header("Location: http://localhost/projeto_SIStore/SIStore/erroVenda");
        } else {
            try{
                $pdo = new PDOFactory();
                $con = $pdo->getConexao();
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               

                $stmt = $con->prepare("INSERT INTO vendas (quantidade_venda,data_venda,valor_venda,id_cliente,id_produto,id_funcionario) VALUES (?,?,?,?,?,?)");
                
                
                $stmt->bindValue(1,$qtd);
                $stmt->bindValue(2,$data);
                $stmt->bindValue(3,$valor);
                $stmt->bindValue(4,$idCliente);
                $stmt->bindValue(5,$idProduto);
                $stmt->bindValue(6,$idFuncionario);
               

                $stmt->execute();


                
                $qtd = (int)$qtd;

                $qtd_dispo = (int)$produto[0]['quantidade_disponível'];

                $qtd_nova = $qtd_dispo - $qtd;

                $qtd_nova = (string)$qtd_nova;

                $stmt_nova = $con->prepare("UPDATE produtos SET quantidade_disponível = ? WHERE id = ?");

                $stmt_nova->bindValue(1,$qtd_nova);
                $stmt_nova->bindValue(2,$idProduto);

                $stmt_nova->execute();

                $con = null;

                header("Location: http://localhost/projeto_SIStore/SIStore/sucessoCadastro");

            } catch (PDOException $e){
                echo 'Error: ' . $e->getMessage();
            } 
        }

     }

     public function listarVendas(){
        require_once 'App/Views/listaVenda.php';
  
       }

     public function erroVenda(){
        require_once 'App/Views/erroVenda.php';
     }
    
}
