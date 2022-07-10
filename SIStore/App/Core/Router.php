<?php

use CoffeeCode\Router\Router;

$route = new Router("URL_BASE");

$route->namespace("App\Controllers");


$route->get("/", "Home:index");
//$route->get("/home", "Home:index");
$route->get("/login", "AcessoRestrito:login");
$route->get("/logout", "AcessoRestrito:logout");
$route->post("/logar", "AcessoRestrito:logar");

//Requisições /Vendedor
$route->get("/indexvendedor","Vendedor:indexVendedor");
$route->get("/formularioCliente","Vendedor:exibirFormCliente");
$route->get("/listarClientes","Vendedor:listarClientes");
$route->post("/cadastraCliente", "Vendedor:cadastrarCliente");
$route->get("/alterarCliente/{id}","Vendedor:alteraFormCliente");
$route->post("/alteraCliente","Vendedor:alteraCliente");
$route->get("/removerCliente/{id}","Vendedor:removerCliente");
$route->get("/sucessoCadastro","Home:sucessoCadastro");
$route->get("/sucessoAlteracao","Home:sucessoAlteracao");

//Requisições - Fornecedor /Comprador
$route->get("/indexcomprador","Comprador:indexComprador");
$route->get("/formularioFornecedor","Comprador:exibirFormFornecedor");
$route->get("/listarFornecedores","Comprador:listarFornecedores");
$route->post("/cadastraFornecedor","Comprador:cadastrarFornecedor");
$route->get("/alterarFornecedor/{id}","Comprador:alteraFormFornecedor");
$route->post("/alteraFornecedor","Comprador:alteraFornecedor");
$route->get("/removerFornecedor/{id}","Comprador:removerFornecedor");
$route->get("/sucessoCadastro","Home:sucessoCadastro");
$route->get("/sucessoAlteracao","Home:sucessoAlteracao");

//Requisições - Categoria /Comprador
$route->get("/formularioCategoria","Comprador:exibirFormCategoria");
$route->get("/listarCategorias","Comprador:listarCategorias");
$route->post("/cadastraCategoria","Comprador:cadastrarCategoria");
$route->get("/alterarCategoria/{id}","Comprador:alteraFormCategoria");
$route->post("/alteraCategoria","Comprador:alteraCategoria");
$route->get("/removerCategoria/{id}","Comprador:removerCategoria");
$route->get("/sucessoCadastro","Home:sucessoCadastro");
$route->get("/sucessoAlteracao","Home:sucessoAlteracao");
$route->get("/sucessoCompra","Home:sucessoCompra");

//Requisições - Compra /Comprador
$route->get("/compra","Comprador:tipoDeCompra");
$route->get("/formularioCompra","Comprador:exibiFormCompra");
$route->post("/cadastraCompra","Comprador:cadastrarCompra");





$route->dispatch();



if ($route->error()) {
    echo "erro:".$route->error();
}
