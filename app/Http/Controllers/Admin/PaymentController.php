<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class PaymentController extends Controller
{
    public function __invoke()
    {
        abort_if(Gate::denies('payment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $payments = Payment::with(['user'])->get();

        return view('admin.payments.index', compact('payments'));
    }
}
