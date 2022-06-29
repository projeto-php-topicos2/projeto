<?php

use CoffeeCode\Router\Router;

$route = new Router("URL_BASE");

$route->namespace("App\Controllers");

$route->group(null);
$route->get("/", "Home:index");
//$route->get("/home", "Home:index");
$route->get("/login", "AcessoRestrito:login");
$route->get("/logout", "AcessoRestrito:logout");
$route->post("/logar", "AcessoRestrito:logar");


$route->get("/indexVendedor", "Vendedor:index");
$route->post("/cadastraCliente", "Vendedor:cadastrarCliente");


$route->dispatch();

if ($route->error()) {
    $route->redirect("/error/{$route->error()}");
}