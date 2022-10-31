<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::select('select * from products');
        return view("products",['products'=>$products]);
    }
    public function show(Request $request ,$id) {
        $products = DB::table('products')->where(['id' => $id])->first();
        return view("products-details",['products'=>$products]);
    }
}
