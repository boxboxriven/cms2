<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Transaction; // Assuming you have a Transaction model

class PaymentController extends Controller
{
    public function createPaymentIntent(Request $request)
{
    Stripe::setApiKey(env('STRIPE_SECRET'));
    try { 
        $charge = Charge::create([
            'amount' => $request->input('amount'), 
            'currency' => 'usd', 
            'source' => $request->input('token'), 
            'description' => 'Paiement via Stripe',
        ]);
        // The payment was successful, prepare the response data
        $responseData = [
            'message' => 'Paiement réussi',
            'transaction_id' => $charge->id, // Include the transaction ID in the response
        ];
        return response()->json($responseData);
    } catch (\Exception $e) {
        // The payment failed, return an error response
        return response()->json(['error' => $e->getMessage()], 501);
    }
}

}
