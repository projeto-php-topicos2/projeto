<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Core\PDOFactory;
use App\Models\ProdutoDAO;
use PDO;
use PDOException;

class Comprador extends BaseController
{
    
    public function __construct() {
        if(!isset($_SESSION)){
            session_start();
        }
    
    
        if (!(isset($_SESSION['id']) && isset($_SESSION['nome']))) {
            header("Location:".URL_BASE."/");
        } else {
            require_once 'App/Views/indexComprador.php';
    
        }
    
    }

    public function indexComprador()
    {
      
        
    if(!isset($_SESSION)){
        session_start();
    }


    if (!(isset($_SESSION['id']) && isset($_SESSION['nome']))) {
        header("Location:".URL_BASE."/");
    } else {
        require_once 'App/Views/indexComprador.php';

    }



    }

    public function exibirFormFornecedor(){
        require_once 'App/Views/cadastroFornecedor.php';
    }

    public function alteraFormFornecedor($data){
        
     
        $_GET['id'] = $data['id'];
        var_dump($_GET['id']);

        require_once 'App/Views/alteracaoFornecedor.php';
    }

    public function alteraFornecedor(){
        
     
        
        $id = $_POST['id'];
        $razao = $_POST['razao_social'];
         $cnpj = $_POST['cnpj'];
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

            $stmt = $con->prepare('UPDATE fornecedores SET razao_social = ? , cnpj = ?, endereco = ?, 
            bairro = ?, cidade = ?, uf= ?, cep = ?, telefone = ?, email = ? WHERE id = ?');

            $stmt->bindValue(1,$razao);
            $stmt->bindValue(2,$cnpj);
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

        require_once 'App/Views/cadastroFornecedor.php';
    }

    public function cadastrarFornecedor(){
     
        

            $razao = $_POST['razao_social'];
            $cnpj = $_POST['cnpj'];
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
               

                $stmt = $con->prepare("INSERT INTO fornecedores (razao_social,cnpj,endereco,bairro
                ,cidade,uf,cep,telefone,email) VALUES (?,?,?,?,?,?,?,?,?)");
                
                
                $stmt->bindValue(1,$razao);
                $stmt->bindValue(2,$cnpj);
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


     public function removerFornecedor($data){

        $_GET['id'] = $data['id'];

        try {
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $stmt = $con->prepare('DELETE FROM fornecedores WHERE id = ?');
            $stmt->bindValue(1, $_GET['id']);
            $stmt->execute();

            $con=null;
          
            header("Location: http://localhost/projeto_SIStore/SIStore/listarFornecedores");
          } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }
     } 
     
     public function alterarFornecedor(){

    } 

     public function listarFornecedores(){
      require_once 'App/Views/listaFornecedor.php';

     }

     public function exibirFormCategoria(){
        require_once 'App/Views/cadastroCategoria.php';
    }

    public function alteraFormCategoria($data){
        
     
        $_GET['id'] = $data['id'];
        var_dump($_GET['id']);

        require_once 'App/Views/alteracaoCategoria.php';
    }

    public function alteraCategoria(){
        
     
        
        $id = $_POST['id'];
        $nome = $_POST['nome_categoria'];
       

        try{

            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $con->prepare('UPDATE categorias SET nome_categoria = ?  WHERE id = ?');

            $stmt->bindValue(1,$nome);
            $stmt->bindValue(2,$id);  

            $stmt->execute();

            $con = null;

            header("Location: http://localhost/projeto_SIStore/SIStore/sucessoAlteracao");
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        require_once 'App/Views/cadastroCategoria.php';
    }

    public function cadastrarCategoria(){
     
        

            $nome = $_POST['nome_categoria'];
         

            try{
                $pdo = new PDOFactory();
                $con = $pdo->getConexao();
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               

                $stmt = $con->prepare("INSERT INTO categorias (nome_categoria) VALUES (?)");
                
                
                $stmt->bindValue(1,$nome);
               

                $stmt->execute();

                $con = null;

                header("Location: http://localhost/projeto_SIStore/SIStore/sucessoCadastro");

            } catch (PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }            


                }


     public function removerCategoria($data){

        $_GET['id'] = $data['id'];

        try {
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $stmt = $con->prepare('DELETE FROM categorias WHERE id = ?');
            $stmt->bindValue(1, $_GET['id']);
            $stmt->execute();

            $con=null;
          
            header("Location: http://localhost/projeto_SIStore/SIStore/listarCategorias");
          } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }
     } 
     
     public function alterarCategoria(){

    } 

     public function listarCategorias(){
      require_once 'App/Views/listaCategoria.php';

     }


     public function tipoDeCompra(){
        require_once 'App/Views/realizarCompra.php';
     }

     public function exibiFormCompra(){
        require_once 'App/Views/cadastroCompra.php';
     }

     public function cadastrarCompra(){
        $qtd = $_POST['quantidade_compra'];
        $data = $_POST['data_compra'];
        $valor = $_POST['valor_compra'];
        $fornecedor = $_POST['id_fornecedor'];
        $produto = $_POST['id_produto'];
        $funcionario = $_POST['id_funcionario'];

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           

            $stmt = $con->prepare("INSERT INTO compras (quantidade_compra ,data_compra ,valor_compra ,id_fornecedor ,id_produto, id_funcionario) VALUES (?,?,?,?,?,?)");
            
            
            $stmt->bindValue(1,$qtd);
            $stmt->bindValue(2,$data);
            $stmt->bindValue(3,$valor);
            $stmt->bindValue(4,$fornecedor);
            $stmt->bindValue(5,$produto);
            $stmt->bindValue(6,$funcionario);
           

            $stmt->execute();

            $con = null;




            header("Location: http://localhost/projeto_SIStore/SIStore/sucessoCompra");

        } catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }   
        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            $query  =  $con->query("SELECT quantidade_disponível FROM produtos WHERE id= $produto");

            $qtd_tabela = $query->fetch(PDO::FETCH_ASSOC);

            $qtd_nova = (int)$qtd_tabela['quantidade_disponível'] ;
            
            $qtd_nova = $qtd_nova + (int)$qtd;

            $qtd_nova = (string)$qtd_nova;

            $stmt = $con->prepare("UPDATE produtos SET quantidade_disponível = ? WHERE id = ?");
            
            
            $stmt->bindValue(1,$qtd_nova);
            $stmt->bindValue(2,$produto);
            
           

            $stmt->execute();

            $con = null;

            


            header("Location: http://localhost/projeto_SIStore/SIStore/sucessoCompra");

        } catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }      

     }

     public function listarProdutos(){
        require_once 'App/Views/listaProduto.php';
  
       }

     public function liberaVenda(){
        $produtoDAO = new ProdutoDAO();
         $id = $_POST['id'];

         $produto = $produtoDAO->buscarProduto($id);

         var_dump($produto);
     
         $novoLibera = null;

         if($produto[0]['liberado_venda'] == 'S'){
            $novoLibera = 'N';
         }

         if($produto[0]['liberado_venda'] == 'N'){
            $novoLibera = 'S';
         }

         

         $produtoDAO->mudarVenda($novoLibera,$id);
         header("Location: http://localhost/projeto_SIStore/SIStore/listarProdutos");
  
       }   


}
