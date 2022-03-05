<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Faker\Provider\pt_BR\check_digit;

class Cartcontroller extends Controller
{
    // Add To Cart Function

    public function addProduct(Request $request)
    {
            if(Auth::check()){
                $checkItem = Cart::where('user_id',Auth::id())->where('prod_id',$request->prod_id)->exists();
                if($checkItem)
                {
                    return "alreeady Added";
                }
                else
                {
                    $cart = new Cart;
                    $cart->user_id = Auth::id();
                    $cart->prod_id = $request->prod_id;
                    $cart->prod_qty = $request->prod_qty;
                    dd($cart);
                }
            }
            else{
                return redirect('/login');
            }


    }



}
