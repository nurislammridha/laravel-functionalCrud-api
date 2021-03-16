<?php

namespace App\Interfaces;

interface CategoryInterface
{
    /**
     * Get Category List
     *
     * @return array Category List Array
     */
    public function getcategoryList();

    public function getCategoryDetails($id);

    public function createCategory($data);

    public function updateCategory($id, $data);

    public function daleteCategory($id);

    // public function crateCategory();
}
