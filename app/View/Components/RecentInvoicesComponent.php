<?php

namespace App\View\Components;

use App\Models\Invoice;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentInvoicesComponent extends Component
{
    public function render(): View|Closure|string
    {
        $invoices = Invoice::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('components.recent-invoices-component', compact('invoices'));
    }
}
