<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function wishlistAuth()
    {

        $products = Auth::user()->favorites;

        return view('user.wishlist', ['products' => $products, 'brands' => Brand::all()]);
    }

    public function wishlist()
    {
            return view('wishlist.index');
    }

    public function store(Product $product)
    {

        Auth::user()->favorites()->toggle($product->id);

        return redirect()->back();
    }

    public function delete(Product $product)
    {

        Auth::user()->favorites()->detach($product->id);

        return redirect()->back();
    }
}
