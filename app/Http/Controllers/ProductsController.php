<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::orderBy('created_at', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return $product;
    }

    public function edit($id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        try {
            Product::destroy($id);

            return response([], 204);
        } catch (\Exception $e){
            return response(['Problem deleting the product', 500]);
        }
    }
}
