<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get All Products

        //  Table For All Products For Admin Panel
    public function listProduct()
    {
        $items = Product::paginate(20);
        return view('admin.product.index',compact('items'));
    }
}
