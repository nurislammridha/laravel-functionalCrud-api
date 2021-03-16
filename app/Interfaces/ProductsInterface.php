<?php

namespace App\Interfaces;

interface ProductsInterface
{
    /**
     * Get Products List
     *
     * @return array Product List Array
     */
    public function getProductList();


    public function getProductDetails($id);

    public function createProduct($data);

    public function updateProduct($id, $data);

    public function deleteProduct($id);
}
