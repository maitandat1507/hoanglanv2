<?php
namespace App\Services;

use App\Eloquents\Product;

/**
* Product Service
*/
class ProductService
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function getAll()
    {
        $rs = $this->productModel->all()->toArray();

        return $rs;
    }
}