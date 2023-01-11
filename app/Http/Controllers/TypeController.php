<?php

namespace App\Http\Controllers;
use App\Http\Requests\TypeRequest;
use App\Models\Type;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function store(TypeRequest $request) {

        Type::firstOrCreate([
            'title' => $request->title1
        ]);

        return redirect()->route('characteristics.index');
    }

    public function update(TypeRequest $request, Type $type){

        $type->update([
            'title' => $request->title1
        ]);

        return redirect()->route('characteristics.index');
    }

    public function destroy(Type $type) {

        $type -> delete();

        return redirect()->route('characteristics.index');
    }
}
