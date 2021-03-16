<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{
    public function getcategoryList()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return $categories;
    }
    public function getCategoryDetails($id)
    {
        $categoriesDetails = Category::where('id', $id)->first();
        return $categoriesDetails;
    }
    public function createCategory($data)
    {
        $createCategory = Category::create($data);
        return $createCategory;
    }

    public function updateCategory($id, $data)
    {
        $categories = $this->getCategoryDetails($id);
        if ($categories) {
            $categories->update($data);
        }
        return $categories;
    }

    public function daleteCategory($id)
    {
        $deletecategory = Category::find($id);
        if ($deletecategory) {
            $deletecategory->delete();
        }
        return $deletecategory;
    }
}
