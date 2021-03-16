<?php

namespace App\Repositories;

use App\Interfaces\ProductsInterface;
use App\Models\Product;

class ProductsRepository implements ProductsInterface
{
    public function getProductList()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return $products;
    }

    public function getProductDetails($id)
    {
        $product = Product::where('id', $id)->first();
        return $product;
    }

    public function createProduct($data)
    {
        return Product::create($data);
    }


    public function updateProduct($id, $data)
    {
        $product = $this->getProductDetails($id);
        if ($product) {
            $product->update($data);
        }
        return $product;
    }

    public function deleteProduct($id)
    {
        $product = $this->getProductDetails($id);
        if ($product) {
            $product->delete();
        }
    }
}
