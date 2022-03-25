<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        
        $data= Product::all();
        return view ('product',['products'=>$data]);
    }
    function detail($id)
    {
    $data = Product::find($id);
    $stock= $data->stock == 0 ? 'indisponible' : 'disponible';
    return view('detail',['product'=>$data,
    'stock'=>$stock]);
    }
    function addToCart(Request $req , $id)
    {
        
        if($req->session()->has('user'))
        {
    $cart= new Cart;
    $cart->user_id=$req->session()->get('user')['id'];
    $cart->product_id=$req->product_id;
    $cart->TotalAmount=$req->quantity;
    $gg = DB::table('products')
    ->select('stock')
    ->where('id', $id)
    ->get();
    $Qtyz=$req->quantity; 
    foreach($gg as $s){
        $q= $s->stock;
            }
$operation = $q-$Qtyz;
$stockres = DB::table('products')
    ->where('id', $id)
    ->update(['stock' =>$operation]);
      $cart->save();
    return redirect ('/');
    }
    else 
    {
    return redirect ('/login');
    }
    } 
    static function cartItem()
{
$userId=Session::get('user')['id'];
return Cart::where('user_id',$userId)->count();
}
function cartList(){
    $userId=Session::get('user')['id'];
 $products=DB::table('cart')
 ->join('products','cart.product_id','=','products.id')
 ->where ('cart.user_id',$userId)
 ->select('products.*','cart.id as cart_id','cart.product_id as product_id','cart.TotalAmount as cart_TotalAmount')
 ->get();
 

 return view ('cartlist',['products'=>$products]);
}
function removeCart ( $product_id,$cart_id)
    {
    $userId=Session::get('user')['id'];
    $riki = DB::table('products')
    ->join('cart','cart.product_id','=','products.id')
    ->select('stock')
    ->where('product_id', $product_id)
    ->get();
    $nia=0;
    foreach($riki as $j){
        $nia= $j->stock;
            }
    $riku = DB::table('cart')
    ->select('TotalAmount')
    ->where('product_id', $product_id)
    ->get();
     $niaz=0;
    foreach($riku as $m){
        $niaz= $m->TotalAmount;
                    }
         $operationz = $nia+$niaz;
    $stockress = DB::table('products')
    ->join('cart','cart.product_id','=','products.id')
    ->select('stock')
    ->where('product_id', $product_id) 
    ->update(['stock' =>$operationz]);
    DB::table('cart')->where('id', $cart_id)->delete();
    return redirect('/cartlist');
    }
    function ordernows(Request $req){
    $userId=Session::get('user')['id'];
    
    $total= $products=DB::table('cart')
     ->join('products','cart.product_id','=','products.id')
     ->select ('TotalAmount','price')
     ->where ('cart.user_id',$userId)
     ->get();
     $niat=0;
     $niar=0;
     $operationn=0;
     $operationn1=0;
    foreach($total as $k){
        $niat= $k->TotalAmount;
        $niar= $k->price;
                   
     $operationn = $niar*$niat;
     $operationn1=$operationn+$operationn1;
     
    }
      return view ('ordernow',['total'=>$operationn1]);
}
function orderPlace(Request $req)
 {
    $userId=Session::get('user')['id'];
    $allCart= Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart)
    {
       $order=new Order;
       $order->product_id=$cart['product_id'];
       $order->user_id=$cart['user_id'];
       $order->status="En Cours De Traitement"; 
       $order->payment_method=$req->payment;
       $order->payment_status="En Cours De Traitement";
       $order->adress=$req->adress;
       $order->Amount=$cart['TotalAmount'];
       $order->save();
       Cart::where('user_id',$userId)->delete();

    }
    $req->input();
    return redirect('/');
}
function myOrders() 
{
    $userId=Session::get('user')['id'];
    $orders = DB::table('orders')
     ->join('products','orders.product_id','=','products.id')
     ->where ('orders.user_id',$userId)
     ->get();
     return view ('myorders',['orders'=>$orders]);
}
private function updatestock($id,$qty){
    $qtestock = DB::table('products')
    ->select('stock')
    ->where('id', $id)
    ->get();
    

    foreach($qtestock as $s){
        $q= $s->stock;
            }
$operation = $q-$qty;
if ($operation < 0 ){
    echo "error";
}
else {
    $stockres = DB::table('products')
    ->where('id', $id)
    ->update(['stock' =>$operation]);
}
}
public function genie() {
    $age = parseInt(document.getElementById("nombre").value, 10);
    alert(age);
}
public function aboutus() {
    $NUM2 = DB::table('a propos')
    ->select('CONTACTNUM2')
    ->get();
    foreach($NUM2 as $x){
        $NUMERO2= $x->CONTACTNUM2;
            }
    $DESC2 = DB::table('a propos')
    ->select('DESCRIPTIONSOC')
    ->get();
    foreach($DESC2 as $e){
        $DESCRIPTION2= $e->DESCRIPTIONSOC;
            }
            return view ('about',['NUMEROFIXE'=> $NUMERO2],['DESCRIPTION2'=>$DESCRIPTION2]);
        
}
public function illdoit () {
    $NUM2 = DB::table('produits')
    ->select('name')
    ->get();
    foreach($NUM2 as $x){
        $NOM= $x->name;
            }
            return view ('admin',['NOM'=> $NOM]);

}
}