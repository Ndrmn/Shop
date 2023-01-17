<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::all()->where('user_id', Auth::user()->id);

        $user = Auth::user();

        $products = $user->products;

        $total = 0;

        foreach ($cartItems as $item) {
            foreach ($products as $product) {
                if ($item->product_id == $product->id) {
                    $total = $total + ($product->price * $item->quantity);
                }
            }
        }

        return view('user.cart', ['products' => $products, 'brands' => Brand::all(), 'cartItems' => $cartItems, 'total'=>$total]);
    }

    public function add(Request $request, Product $product) {

        $currentProduct = Cart::all()->where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
        if($currentProduct != null) {
            $currentProduct->quantity = $currentProduct->quantity + $request->quantity;
            $currentProduct->save();
        } else {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'quantity' => $request->quantity
            ]);
        }
        session()->flash('notification', ['message' => 'Product added to cart']);

        return redirect()->back();
    }

    public function change(Request $request, Product $product) {

        $currentProduct = Cart::all()->where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

        if($request->quantity == 0) {
            $currentProduct->delete();
            session()->flash('notification', ['message' => 'Product removed from cart']);

        } else {
            $currentProduct->quantity = $request->quantity;
            $currentProduct->save();
            session()->flash('notification', ['message' => 'Product changed quantity in cart']);
        }

        return redirect()->back();
    }

    public function destroy(Cart $cart) {

        $cart -> delete();

        session()->flash('notification', ['message' => 'Product removed from cart']);

        return redirect()->back();
    }
    public function destroyAll(User $user) {

        $cart = Cart::all()->where('user_id', $user->id);
        foreach($cart as $item) {
            $item -> delete();
        }

        session()->flash('notification', ['message' => 'All products have been removed from cart']);
        return redirect()->back();
    }
}

