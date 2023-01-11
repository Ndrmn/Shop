<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Type;
use App\Models\Brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request) {

        Category::firstOrCreate([
            'title' => $request->title
        ]);

        return redirect()->route('characteristics.index');
    }

    public function update(CategoryRequest $request, Category $category){

        $category->update([
            'title' => $request->title
        ]);

        return redirect()->route('characteristics.index');
    }

    public function destroy(Category $category) {

        $category -> delete();

        return redirect()->route('characteristics.index');
    }
}
