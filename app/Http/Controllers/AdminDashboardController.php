<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {

        $income = Transaction::all()->sum('total');
        $users = User::all()->count();
        $orders = Transaction::all()->count();

        return view('admin.dashboard', ['income'=>$income, 'orders'=>$orders, 'users'=>$users]);
    }
}
