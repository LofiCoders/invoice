<?php

namespace App\Actions;

use App\Models\Customer;
use Illuminate\Http\Request;

class StoreCustomerAction
{
    public function storeCustomer(Request $request): void
    {
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'company' => $request->company,
            'website' => $request->website,
            'address' => $request->address,
            'user_id' => auth()->id(),
        ]);
    }
}
