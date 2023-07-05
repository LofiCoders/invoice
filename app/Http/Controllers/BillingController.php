<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Plan;

class BillingController extends Controller
{
    public function index()
    {
        $monthlyPlans = Plan::where('payment_period', '=', 'Monthly')
            ->whereNotNull('stripe_plan_id')->get();
        $yearlyPlans = Plan::where('payment_period', '=', 'Yearly')
            ->whereNotNull('stripe_plan_id')->get();

        $currentPlan = auth()->user()->subscription('default') ?? null;
        $paymentMethods = null;
        $defaultPaymentMethod = null;

        $payments = Payment::where('user_id', auth()->id())->latest()->get();

        return view('billing.index', compact('monthlyPlans', 'yearlyPlans', 'paymentMethods', 'currentPlan', 'defaultPaymentMethod', 'payments'));
    }

    public function cancel()
    {
        auth()->user()->subscription('default')->cancel();

        return redirect()->back();
    }

    public function resume()
    {
        auth()->user()->subscription('default')->cancel();

        return redirect()->back();
    }

    public function downloadInvoice($paymentId)
    {
        $payment = Payment::where('user_id', auth()->id())->where('id', $paymentId)->firstOrFail();
        $filename = storage_path('app/invoices/'.$payment->id.'.pdf');
        if (! file_exists($filename)) {
            abort(404);
        }

        return response()->download($filename);
    }
}
