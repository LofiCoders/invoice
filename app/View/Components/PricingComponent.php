<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class PricingComponent extends Component
{
    public function render(): View|Closure|string
    {
        $monthlyPlans = DB::table('plans')->where('payment_period', '=', 'Monthly')->get();

        return view('components.pricing-component', ['monthlyPlans' => $monthlyPlans]);
    }
}
