<?php

namespace App\Http\Controllers;
use App\Http\Requests\TypeRequest;
use App\Models\Type;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function store(TypeRequest $request) {

        Type::firstOrCreate([
            'title' => $request->title
        ]);

        return redirect()->route('category.index');
    }

    public function update(TypeRequest $request, Type $type){

        $type->update([
            'title' => $request->title
        ]);

        return redirect()->route('category.index');
    }

    public function destroy(Type $type) {

        $type -> delete();

        return redirect()->route('category.index');
    }
}
