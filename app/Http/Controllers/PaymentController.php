<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function createPaymentIntent(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        
        try { 
            // Create a Stripe Customer and attach the payment source (token) to that customer
            $customer = Customer::create([
                'email' => $request->input('email'), // Assuming you have an email field in your request
                'source' => $request->input('token'), // Token from the payment form
            ]);

            // Charge the customer
            $charge = Charge::create([
                'amount' => $request->input('amount'), 
                'currency' => 'usd', 
                'customer' => $customer->id, // Customer ID from the newly created customer
                'description' => 'Paiement via Stripe',
            ]);

            // Payment successful
            return response()->json(['message' => 'Paiement réussi']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 501);
        }
    }
}
