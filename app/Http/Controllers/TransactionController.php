<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index() {

        $transactions = Transaction::all()->where('user_id', Auth::user()->id);

        return view('user.orders', ['transactions' => $transactions]);
    }

    public function indexAdmin() {

        $transactions = Transaction::all();

        return view('admin.transactions', ['transactions' => $transactions]);
    }

    public function store() {

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

        $transaction = Transaction::create([
            'total' => $total,
            'user_id' => Auth::user()->id
        ]);

        foreach ($cartItems as $item) {
            foreach ($products as $product) {
                if ($item->product_id == $product->id) {
                    ProductTransaction::create([
                        'price' => $product->price,
                        'quantity' => $item->quantity,
                        'transaction_id' => $transaction->id,
                        'product_id' => $product->id
                    ]);
                }
            }
        }

        foreach ($cartItems as $item) {
            $item->delete();
        }

        return redirect()->route('user.orders', ['user' => Auth::user()]);
    }
}
