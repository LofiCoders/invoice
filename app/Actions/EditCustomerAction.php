<?php

namespace App\Actions;

use App\Models\Customer;
use Illuminate\Http\Request;

class EditCustomerAction
{
    public function editCustomer(Request $request)
    {
        try {
            $customer = Customer::update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'company' => $request->company,
                'website' => $request->website,
                'address' => $request->address,
                'user_id' => auth()->id(),
            ]);
        } catch (\Exception $exception) {
            return response($exception);
        }
    }
}
