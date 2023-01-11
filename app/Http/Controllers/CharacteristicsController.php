<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class CharacteristicsController extends Controller
{
    public function index() {

        return view('admin.characteristics', ['categories' => Category::all(), 'types' => Type::all(), 'brands' => Brand::all()]);
    }
}
