<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexAdmin() {

        return view('admin.allproducts', ['products' => Product::with('images')->get(), 'categories' => Category::all(), 'types' => Type::all()]);

    }

    public function index() {

        return view('product.index', ['products' => Product::with('images')->get(), 'categories' => Category::all(), 'types' => Type::all()]);

    }

    public function show(Product $product) {


        return view('product.show', ['product' => $product, 'images' => Image::where('product_id', $product->id)->get()]);
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

        return redirect()->route('product.indexAdmin');
    }

    public function edit(Product $product) {

        return view('admin.updateproduct', ['product' => $product, 'categories' => Category::all(), 'types' => Type::all()]);
    }

    public function update(ProductRequest $request, Product $product, Image $image){

        $product->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id
        ]);

        if($request->has('image')) {

            foreach ( (Image::where('product_id', $product->id)->get()) as $imageToDelete) {
                Storage::disk('public')->delete($imageToDelete->url);
            };

            foreach ($request->file('images') as $imagefile) {
                $path = 'uploads/products/' . $product->id;
                Image::create([
                    'url' => $imagefile->store($path,'public'),
                    'product_id' => $product->id
                ]);
            };
        };

        return redirect()->route('product.indexAdmin');
    }

    public function active(Request $request, Product $product){

        $product->update([
            'is_active' => $request->is_active
        ]);
        return redirect()->route('product.indexAdmin');
    }

    public function destroy(Product $product, Image $image) {

//        foreach ( (Image::where('product_id', $product->id)->get()) as $imageToDelete) {
//            Storage::disk('public')->delete($imageToDelete->url);
//        };
        $product -> delete();

        return redirect()->route('product.indexAdmin');
    }
}
