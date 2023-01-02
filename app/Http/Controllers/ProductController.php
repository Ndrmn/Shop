<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        return view('admin.allproducts', ['products' => Product::all()]);
    }


    public function create() {

        return view('admin.addproduct', ['categories' => Category::all(), 'types' => Type::all()]);
    }

    public function store(ProductRequest $request) {
        $product = Product::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id
        ]);
        foreach ($request->file('images') as $imagefile) {
            $path = 'uploads/products/' . $product->id;
            Image::create([
                'url' => $imagefile->store($path,'public'),
                'product_id' => $product->id
            ]);
        };

        return redirect()->route('product.index');
    }
}
