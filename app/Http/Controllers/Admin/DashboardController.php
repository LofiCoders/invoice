<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;

class DashboardController extends Controller
{
   public function __invoke()
   {
       $totalInvoices = Invoice::where('user_id', '=', auth()->id())->count();
       $totalCustomers = Customer::where('user_id', '=', auth()->id())->count();
       $totalProducts = Product::where('user_id', '=', auth()->id())->count();

    return view('admin.dashboard', compact('totalProducts', 'totalCustomers', 'totalInvoices'));
   }
}
