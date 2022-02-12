<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //Get ALL Items
    public function getAllProducts(Request $request)
    {
////        Get Column 1 Item
        $db_one_atlanta = DB::connection('mysql2')->table('item')
            ->where('Alternate','!=','')
            ->where('avail1115628','!=','')
            ->orWhere('avail1119871','!=','')
            ->select('Catalog','Alternate','brand', 'LongDescription',
                'avail1115628 as qty_one',
                'avail1119871 as qty_two')
            ->get();

        $db_one_antonio = DB::connection('mysql3')->table('item')
            ->where('Alternate','!=','')
            ->where('avail1115704','!=','')
            ->orWhere('avail1117056','!=','')
            ->orWhere('avail252085','!=','')
            ->orWhere('avail1117630','!=','')
            ->select('Catalog','Alternate','brand', 'LongDescription',
                'avail1115704 as qty_one',
                'avail1117056 as qty_two',
                'avail252085 as qty_three',
                'avail1117630 as qty_four')
            ->get();

        $this->mergeItemValues($db_one_atlanta);
        $this->mergeItemValues($db_one_antonio);

        return "success";

    }

    private function mergeItemValues($data){
        $items = (object)$data;

        if($items->count()){
            foreach($items as $item){
                $qty_one = $item->qty_one ?: 0;
                $qty_two = $item->qty_two ?: 0;
                $qty_three = isset($item->qty_three) && $item->qty_three ?: 0;
                $qty_four = isset($item->qty_four) && $item->qty_four ?: 0;
                $qty = $qty_one + $qty_two + $qty_three + $qty_four;
                $checkItem = Product::where('catalog',$item->Catalog)->first();

                if(is_null($checkItem)){
                    Product::create([
                        'catalog'=> $item->Catalog,
                        'item' =>  $item->Alternate,
                        'brand' =>  $item->brand,
                        'LongDescription'=> $item->LongDescription,
                        'qty' => $qty,

                    ]);
                }else{
                    // echo $qty;
                    DB::table('products')->where('id', $checkItem->id)->update(['qty' => DB::raw(floatval('qty') + floatval($qty))]);
                }
            }
        }

    }
}
