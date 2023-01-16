<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index(User $user)
    {

        return view('admin.users', ["users" => User::all()]);
    }
    public function show()
    {

        return view('user.personal');
    }

    public function edit(User $user) {

        return view('admin.updateUsers', ['user' => $user]);
    }

    public function active(Request $request, User $user){

        $user->update([
            'is_active' => $request->is_active
        ]);

        return redirect()->route('admin.user.index');
    }

     public function adminUpdate(UserRequest $request, User $user){

        if ($request->password == null) {
            $pass = $user->password;
        } else {
            $pass = Hash::make($request->password);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $pass
        ]);

        if($request->has('avatar')) {
             if($user->avatar != "default_avatar.svg") {
                 Storage::disk('public')->delete($user->avatar);
             }
             $user->update([
                'avatar' => $request->file('avatar')->store('uploads/users/' . $user->id, 'public')
            ]);
        };
        return redirect()->route('admin.user.index');
     }

    public function destroy(User $user) {

//        if ($user -> avatar != "" ) {
//            Storage::disk('public')->delete($user -> avatar);
//        }
        $user -> delete();

        return redirect()->route('admin.user.index');
    }

    public function orders()
    {

        return view('user.orders');
    }

//    public function cart()
//    {
//        $user = Auth::user();
//
//        $products = $user->products;
//
//        return view('user.cart', ['products' => $products, 'brands' => Brand::all()]);
//    }

    public function update(UserRequest $request, User $user){

                if ($request->password == null) {
            $pass = $user->password;
        } else {
            $pass = Hash::make($request->password);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $pass
        ]);

        if($request->has('avatar')) {
            if($user->avatar != "default_avatar.svg") {
                Storage::disk('public')->delete($user->avatar);
            }
            $user->update([
                'avatar' => $request->file('avatar')->store('uploads/users/' . $user->id, 'public')
            ]);
        };
        return view('user.personal', ["user" => Auth::user()]);
    }
}


