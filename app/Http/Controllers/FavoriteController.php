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

        $toggle = Auth::user()->favorites()->toggle($product->id);

        if ($toggle['attached'] != []) {
            session()->flash('notification', ['message' => 'Product added to favorites']);
        } else {
            session()->flash('notification', ['message' => 'Product removed from favorites']);
        }

        return redirect()->back();
    }

    public function delete(Product $product)
    {

        Auth::user()->favorites()->detach($product->id);

        session()->flash('notification', ['message' => 'Product removed from favorites']);
        return redirect()->back();
    }
}
