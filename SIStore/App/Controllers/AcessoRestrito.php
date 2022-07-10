<?php

namespace App\Controllers;



use App\Core\BaseController;
use App\Core\PDOFactory;
use CoffeeCode\Router\Router;
use PDO;
use PDOException;
use GUMP as Validador;

class AcessoRestrito extends BaseController
{

    /*
    protected $filters = [
        'email' => 'trim|sanitize_email',
        'senha' => 'trim|sanitize_string',
        'captcha' => 'trim|sanitize_string'
    ];

    protected $rules = [
        'email'    => 'required|min_len,8|max_len,255',
        'senha'  => 'required',
        'captcha'  => 'required|validar_CAPTCHA_CODE'
    ];

    */


    public function login()
    {

      
        require_once "App/Views/login.php";
    }

    public function logar()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['cpf']) || isset($_POST['senha']) || isset($_POST['papel'])) {

                if(strlen($_POST['cpf']) == 0) {
                    echo "Preencha seu CPF";
                } else if(strlen($_POST['senha']) == 0) {
                    echo "Preencha sua senha";
                } else if($_POST['papel'] == '') {
                    echo "Selecione o papel";
                }    
            
                    $cpf = $_POST['cpf'];
                    $senha = $_POST['senha'];
                    $papel = $_POST['papel'];
            
                    $sql_codigo = "SELECT * FROM funcionarios WHERE cpf = '$cpf' AND senha = '$senha' AND papel = '$papel'";
                    $query = null;
                    $resultado = null;
                    $usuario = null;
                    
                    
                    $mysql = new PDOFactory();
              
                    $query = $mysql->getConexao()->query($sql_codigo);

                    $resultado = $query->fetch();
   
                    if(gettype($resultado) != "boolean") {
                        
                        $usuario = $resultado;
            
                        if(!isset($_SESSION)) {
                            session_start();
                        }
            
                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['nome'] = $usuario['nome'];
                        
                        var_dump($usuario);
                        
                        
                        if($usuario['papel'] == '1'){
                            
                           
                             
                           header("Location: http://localhost/projeto_SIStore/SIStore/indexvendedor") ;
                           exit();
                        }
                        if($usuario['papel'] == '2'){
                            
                           
                             
                            header("Location: http://localhost/projeto_SIStore/SIStore/indexcomprador") ;
                            exit();
                         }
            
                    } else {
                        echo "Falha ao logar!";
                    }
            
                }     
        }
       

    }

    public function logout()
    {
        if(!isset($_SESSION)){
            session_start();
        }
    

        session_unset();
        session_destroy();
        header("Location: http://localhost/projeto_SIStore/SIStore/");
        exit();

    }

}
