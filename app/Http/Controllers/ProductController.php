<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function getProductById(int $id){

        return response()->json(ProductModel::find($id), 200);

    }
}
