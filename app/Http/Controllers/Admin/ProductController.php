<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

//  All Products For Website

    public function products()
    {
        $count = Product::count();
        $items = Product::SimplePaginate(10);
        return view('web.ptoducts.index',get_defined_vars());
    }



    // Product Detail For website
    public function productDetail($id)
    {

        $item = Product::where('id',$id)->first();
        return view('web.ptoducts.productDetail',get_defined_vars());
    }

        // Search For Product
    public function search(Request $request)
    {
        $item = Product::where('item','like','%'.$request->input('query').'%' )
            ->first();
        return view('web.ptoducts.search',compact('item'));
    }


    // All Products For Admin Panel
    // Get All Products

        //  Table For All Products For Admin Panel
    public function listProduct()
    {
        $items = Product::paginate(20);
        return view('admin.product.index',compact('items'));
    }
}
