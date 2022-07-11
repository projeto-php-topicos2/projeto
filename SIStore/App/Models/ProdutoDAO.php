<?php 

namespace App\Models;

use App\Core\BaseController;
use App\Core\PDOFactory;
use PDO;
use PDOException;


class ProdutoDAO extends BaseController{

    public function buscarProdutos(): array{
        $produtos = null;

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->query("SELECT * FROM produtos");

            $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

            return $produtos;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }


    public function mudarVenda($mudanca,$id_produto) {
    

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->prepare("UPDATE produtos SET liberado_venda = ? WHERE id = ?");

            $query->bindValue(1,$mudanca);
            $query->bindValue(2,$id_produto);

            $query->execute();

            $con = null;

            
        } catch(PDOException $e){
            $e->getMessage();
        }
    }


    public function buscarProduto($id): array {
        $produto = null;

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->query("SELECT * FROM produtos WHERE id = $id");

            $produto = $query->fetchAll(PDO::FETCH_ASSOC);

            return $produto;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }
    
}

