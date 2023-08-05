<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductDetail extends Component
{
    public $product;
    public $variants;
    public $productAttributes;
    /**
     * Create a new component instance.
     */
    public function __construct($product)
    {
        $this->product = $product;
        $this->variants = $this->product->variants;
        $this->productAttributes  = $this->product->getAttributeValues();
        // dd($this->productAttributes);
        // dd($this->productAttributes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-detail');
    }
}
