<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentProductsComponent extends Component
{
    public function render(): View|Closure|string
    {
        $recentPrducts = Product::limit(5)->get();

        return view('components.recent-products-component', compact('recentPrducts'));
    }
}
