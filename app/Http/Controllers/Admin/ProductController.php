<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductAdminRequest;
use App\Http\Requests\UpdateProductAdminRequest;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\VariantAttribute;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categoryTree = (new Category())->buildCategoryTree();
        $brands = Brand::all();
        return view('admin.product.create', compact('categoryTree','brands'));
    }
    public function store(StoreProductAdminRequest $request)
    {
        $validatedData = $request->validated();

        // Handle add products table
        $product = Product::create($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/product/' . $name_gen);
            $save_url = 'upload/product/' . $name_gen;
            $product->image = $save_url;
            $product->save();
        }

        // Handle category_product table
        if ($request->has('category_id')) {
            foreach ($request->category_id as $category) {
                CategoryProduct::create([
                    'category_id' => $category,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('admin.product.edit', $product->slug)->with('success', 'Sản phẩm đã được tạo thành công');
    }
    public function edit(Product $product)
    {

        $categoryTree = (new Category())->buildCategoryTree();
        $categorySelected = $product->categories()->pluck('id')->toArray();
        $attributes = Attribute::all();
        $productVariants = $product->variants;
        $brands = Brand::all();
        return view('admin.product.edit', compact('categoryTree', 'product', 'categorySelected', 'attributes', 'productVariants','brands'));
    }
    public function update(UpdateProductAdminRequest $request, Product $product)
    {
        // dd($request->all());
        // Kiểm tra nếu slug đã được thay đổi
        if ($request->has('slug') && $request->slug !== $product->slug) {
            // Kiểm tra xem slug mới có duy nhất hay không
            $slugExists = Product::where('slug', $request->slug)->exists();

            if ($slugExists) {
                return back()->withErrors(['slug' => 'The slug has already been taken.'])->withInput();
            }
        }
        $validatedData = $request->validated();
        // Cập nhật dữ liệu của danh mục
        $product->update($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/product/' . $name_gen);
            $save_url = 'upload/product/' . $name_gen;

            // Xóa hình ảnh cũ (nếu có)
            if ($product->image) {
                unlink($product->image);
            }

            $product->image = $save_url;
            $product->save();
        }

        // Handle category_product
        if ($request->has('category_id')) {
            $categoryIds = $request->category_id;
            $product->categories()->sync($categoryIds);
        }


        $variantsData = $request->input('variants');
        // dd($variantsData);
        if ($variantsData != null) {
            foreach ($variantsData as $variantId => $variantData) {
                $variant = ProductVariant::find($variantId);
                foreach ($variantData['attributes'] as $attributeId => $attributeValueId) {
                    if ($attributeValueId) {
                        VariantAttribute::updateOrCreate(
                            ['variant_id' => $variant->id, 'attribute_id' => $attributeId, 'product_id' => $product->id],
                            ['value_id' => $attributeValueId,]
                        );
                    } else {
                        $variantAtt = VariantAttribute::where('attribute_id', $attributeId)->where('variant_id', $variant->id)->first();
                        if ($variantAtt) {
                            $variantAtt->delete();
                        }
                    }
                }

                // Cập nhật giá và số lượng cho biến thể
                $variant->update([
                    'price' => $variantData['price'],
                    'quantity' => $variantData['quantity'],
                ]);
            }
            $existingVariantIds = array_keys($variantsData);
            $currentVariantIds = $product->variants->pluck('id')->toArray();
            $deletedVariantIds = array_diff($currentVariantIds, $existingVariantIds);
            // dd($deletedVariantIds, $currentVariantIds);
            foreach ($deletedVariantIds as $deletedVariantId) {
                // Xóa biến thể khỏi cơ sở dữ liệu
                ProductVariant::destroy($deletedVariantId);
            }
        } else {
            $variantProduct = ProductVariant::where('product_id', $product->id)->get();
            // dd($variantProduct);
            foreach ($variantProduct as $each) {
                $each->delete();
            }
        }


        if ($request->input('variant')) {
            $variants = $request->input('variant');

            foreach ($variants as $each) {
                // Tạo một biến thể mới
                // dd($each);
                $variant = new ProductVariant();

                // Lưu thông tin của biến thể
                $variant->product_id = $product->id;
                $variant->price = $each['price'];
                $variant->quantity = $each['quantity'];
                $variant->save();
                // Lưu thông tin của các thuộc tính của biến thể

                foreach ($each['attributes'] as $attributeId => $attributeValueId) {
                    // dd($attributeValueId);
                    if ($attributeValueId) {
                        VariantAttribute::create([
                            'variant_id' => $variant->id,
                            'attribute_id' => $attributeId,
                            'value_id' => $attributeValueId,
                            'product_id' => $product->id,
                        ]);
                        // dd(1);
                    }
                }
            }
        }



        return redirect()->back()->with('success', 'Product đã được cập nhật thành công');
    }
    public function media(Request $request, Product $product)
    {
        if ($request->has('thumbs')) {
            $position = $product->getMedia('thumbs')->count() + 1;
            foreach ($request->thumbs as $thumb) {
                $media = $product->addMedia($thumb)->toMediaCollection('thumbs');
                $media->update(['position' => $position]);
                $position++;
            }
        }
        return redirect()->back()->with('success', 'Cập nhật media thành công');
    }
    public function updateMediaPosition(Request $request, Product $product)
    {
        $sortData = $request->sortedData;

        foreach ($sortData as $key => $value) {
            $mediaId = $value['media_id'];
            $position = $value['position'];

            $media = Media::findOrFail($mediaId);
            $media->position = $position;
            $media->save();
        }

        return response()->json(['success' => true]);
    }
    public function destroyMedia(Media $media)
    {
        $media->delete();

        return response()->json([
            'success' => true,
        ]);
    }
}
