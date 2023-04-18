<?php

namespace App\Controllers;

use App\Models\ProductModel as ModelsProductModel;
use Model\ProductModel;
use Product;

class ProductController extends BaseController
{
    public function listProducts()
    {
        $product = new ModelsProductModel();

        $data['result'] = $product->find();
        
        return view('listProducts', $data);
    }
}
