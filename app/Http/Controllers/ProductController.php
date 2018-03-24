<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objects\ProductViewObject;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService, $viewData;

    public function __construct()
    {
        $this->viewData = new ProductViewObject();
        $this->productService = new ProductService();

        parent::__construct();
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return $products;
    }
}