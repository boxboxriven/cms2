<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
class PaymentController extends Controller
{
public function createPaymentIntent(Request $request)
{

Stripe::setApiKey(env('STRIPE_SECRET'));
try { 
$charge = Charge::create([
'amount' => $request->input('amount'), // Le montant à payer en cents (100 = 1 dollar)
'currency' => 'usd', // La devise
'source' => $request->input('token'), //Le token Stripe de la carte de crédit
'description' => 'Paiement via Stripe', // Description facultative
]);
// Le paiement a réussi
return response()->json(['message' => 'Paiement réussi']);
}
catch (\Exception $e) {
return response()->json(['error' => $e->getMessage()], 501);
}
}
}