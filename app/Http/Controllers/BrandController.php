<?php

namespace App\Http\Controllers;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function store(BrandRequest $request) {

        Brand::firstOrCreate([
            'title' => $request->title2
        ]);

        return redirect()->route('characteristics.index');
    }

    public function update(BrandRequest $request, Brand $brand){

        $brand->update([
            'title' => $request->title2
        ]);

        return redirect()->route('characteristics.index');
    }

    public function destroy(Brand $brand) {

        $brand -> delete();

        return redirect()->route('characteristics.index');
    }
}
