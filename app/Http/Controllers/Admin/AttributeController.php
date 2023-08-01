<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::all();
        return view('admin.attribute.index', compact('attributes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:attributes',
        ]);
        $attributes = Attribute::create([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success', 'Attribute created successfully');
    }
    public function edit(Attribute $attribute)
    {
        return view('admin.attribute.edit', compact('attribute'));
    }
    public function update(Attribute $attribute, Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                Rule::unique('attributes')->ignore($attribute->id),
            ],
        ]);
        $attribute->update($validated);
        return redirect()->back()->with('success', 'Attribute Update successfully');
    }
    public function delete(Attribute $attribute){
        $attribute->delete();
        return redirect()->back()->with('success', 'Attribute Delete successfully');
    }
}
