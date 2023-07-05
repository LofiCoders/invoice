<?php

namespace App\Actions;

use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;

class DeleteCustomerAction
{
    public function deleteCustomer(Request $request)
    {
        try {
            $customer = Customer::delete();
        } catch (Exception $exception) {
            return response('Failed to delete');
        }
    }
}
