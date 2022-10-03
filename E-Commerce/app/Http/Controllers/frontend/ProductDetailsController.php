<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function productdetails($id)
    {
        {
            $products = Product::find($id);
            return view('frontend.productdetails' , compact('products'));
        }
    }
}
