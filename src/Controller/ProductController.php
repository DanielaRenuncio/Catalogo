<?php

namespace Code\Controller;

use Code\View\View;
use Code\Entity\Product;

class ProductController 
{
    public function index($id)
    {

        print($id);
      
        //preciso para na instanciação desta classe um parâmetro que 
       //é a conexão PDO
       $pdo = new \PDO('mysql:dbname=formacao_php;host:127.0.0.1','root','maxfono');
       var_dump((new Product($pdo))->find($id));die;
     /*   $products = new Product($pdo);
       // var_dump($products->findAll());die;
        $view = new View('site/index.phtml'); 
        //estou mandando os produtos para a view
        $view->products = $products->findAll();
        return $view->render(); */
    }
}



?>