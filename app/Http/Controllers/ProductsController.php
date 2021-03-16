<?php

namespace App\Http\Controllers;

use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $productRepository;

    function __construct(ProductsRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->productRepository->getProductList();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->productRepository->createProduct($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->productRepository->getProductDetails($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $this->productRepository->updateProduct($id, $request->all());
        if ($product) {
            return response(['status' => true, 'data' => $product, 'message' => 'Product Updated Successfully !']);
        } else {
            return response(['status' => false, 'data' => null, 'message' => 'No product found !']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->deleteProduct($id);
        if ($product) {
            return response(['status' => true, 'data' => $product, 'message' => 'Product Deleted Successfully !']);
        } else {
            return response(['status' => false, 'data' => null, 'message' => 'No product found !']);
        }
    }
}
