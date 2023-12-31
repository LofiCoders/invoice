<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\Admin\CustomerResource;
use App\Models\Customer;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CustomerApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomerResource(Customer::with(['user', 'countries'])->get());
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->all());
        $customer->countries()->sync($request->input('countries', []));

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        $customer->countries()->sync($request->input('countries', []));

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Customer $customer)
    {
        abort_if(Gate::denies('customer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
