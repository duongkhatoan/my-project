<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeValueAdminRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttributeValueController extends Controller
{
    public function index()
    {
        $attributeValues = AttributeValue::all();
        $attributes = Attribute::all();
        return view('admin.attributevalue.index', compact('attributeValues', 'attributes'));
    }

    public function store(StoreAttributeValueAdminRequest $request)
    {
        $validated = $request->validated();
        $attributeValues = AttributeValue::create([
            'value' => $request->value,
            'attribute_id' => $request->attribute_id,
        ]);
        return redirect()->back()->with('success', 'AttributeValue created successfully');
    }
    public function edit(AttributeValue $attributeValue)
    {
        $attributes = Attribute::all();
        return view('admin.attributevalue.edit', compact('attributeValue', 'attributes'));
    }
    public function update(AttributeValue $attributeValue, Request $request)
    {
        $validated = $request->validate([
            'value' => [
                'required',
                Rule::unique('attribute_values')->ignore($attributeValue->id),
            ],
            'attribute_id' => 'exists:attributes,id',
        ]);
        $attributeValue->update($validated);
        return redirect()->back()->with('success', 'AttributeValue Update successfully');
    }
    public function delete(AttributeValue $attributeValue)
    {
        $attributeValue->delete();
        return redirect()->back()->with('success', 'AttributeValue Delete successfully');
    }
}
