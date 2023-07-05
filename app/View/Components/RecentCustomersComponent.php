<?php

namespace App\View\Components;

use App\Models\Customer;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentCustomersComponent extends Component
{
    public function render(): View|Closure|string
    {
        $customers = Customer::with(['user', 'country'])->limit(10)->get();

        return view('components.recent-customers-component', ['customers' => $customers]);
    }
}
