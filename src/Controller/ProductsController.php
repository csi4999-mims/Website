<?php
namespace App\Controller;
use App\Controller\AppController;
class ProductsController extends AppController {
    public function index() {
        //fetch products resultset from databse


        //set products data and pass to the view
        $this->set('products',$products);
    }
}
