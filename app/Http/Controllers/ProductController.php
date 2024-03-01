<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use App\Post;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(Request $req)
    {
        if($req){   
        $data= Product::all();
        return view ('index2',['products'=>$data]);
    }else{echo 'eror';}
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
     ->select ('TotalAmount','price_promo')
     ->where ('cart.user_id',$userId)
     ->get();
     $niat=0;
     $niar=0;
     $operationn=0;
     $operationn1=0;
    foreach($total as $k){
        $niat= $k->TotalAmount;
        $niar= $k->price_promo;
                   
     $operationn = $niar*$niat;
     $operationn1=$operationn+$operationn1;
     
    }
      return view ('ordernow',['total'=>$operationn1]);
}

function orderPlace(Request $req)
{
    $userId = Session::get('user')['id'];
    $allCart = Cart::where('user_id', $userId)->get();
    $totalAmount = 0;
    $test= $req->total;
    foreach ($allCart as $cart) {
        $totalAmount += $cart['TotalAmount'];

        $order = new Order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->status = "En Cours De Traitement";
        $order->payment_method = $req->payment;
        $order->payment_status = "En Cours De Traitement";
        $order->created_at = date('y-m-d h:i:s', strtotime('1 hour'));
        $order->adress = $req->adress;
        $order->Amount = $cart['TotalAmount'];
        $order->save();
    }

    // Set $test to the total amount
    

    Cart::where('user_id', $userId)->delete();

    // Pass $test to the view
    return view('payment', ['amount' => $test]);
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
public function Admin () {
    $NUM2 = DB::table('products')
    ->select('name','price','stock','id')
    ->get();
    $myArray = [];
    $i=0;
    foreach($NUM2 as $x){
        $i++;
        array_push($myArray, (object)[
        'Nom' => $x->name,
        'Prix' => $x->price,
        'Qte' => $x->stock,
        'ID' => $x->id,
    ]);
            }
            $NUM2 = DB::table('users')
    ->select('name','email','id')
    ->get();
    $myArray1 = [];
    $t=0;
    foreach($NUM2 as $n){
        $t++;
        array_push($myArray1, (object)[
        'name' => $n->name,
        'email' => $n->email,
        'id' => $n->id,
        
    ]);
            }
            $NUM3 = DB::table('orders')
            ->select('*')
            ->get();
            $myArray3 = [];
            $c=0;
            foreach($NUM3 as $z){
                $c++;
                array_push($myArray3, (object)[
                'Adresse' => $z->adress,
                'IDClient' => $z->user_id,
                'IDProduit' => $z->product_id,
                'PM' => $z->payment_method,
                'PS' => $z->payment_status,
                'n' => $z->id,
                'nz' => $z->Amount,
                
                
            ]);
                    }
                        
            return view('admin', array('tab' => $myArray,'tab1' => $myArray1,'tab3' => $myArray3));
            

}
function ModifAdmin (){
    $NUM2 = DB::table('products')
    ->select('name','price','stock','id','Promotion','price_promo')
    ->get();
    $myArray = [];
    $i=0;
    foreach($NUM2 as $x){
        $i++;
        array_push($myArray, (object)[
        'Nom' => $x->name,
        'Prix' => $x->price,
        'Qte' => $x->stock,
        'ID' => $x->id,
        'Promotion' => $x->Promotion,
        'Prix_promo' => $x->price_promo
    ]);
            }
            $NUM2 = DB::table('users')
    ->select('name','email','id')
    ->get();
    $myArray1 = [];
    $t=0;
    foreach($NUM2 as $n){
        $t++;
        array_push($myArray1, (object)[
        'name' => $n->name,
        'email' => $n->email,
        'id' => $n->id,
        
    ]);
            }
            $NUM3 = DB::table('orders')
            ->select('*')
            ->get();
            $myArray3 = [];
            $c=0;
            foreach($NUM3 as $z){
                $c++;
                array_push($myArray3, (object)[
                'Adresse' => $z->adress,
                'IDClient' => $z->user_id,
                'IDProduit' => $z->product_id,
                'PM' => $z->payment_method,
                'PS' => $z->payment_status,
                'n' => $z->id,
                'nz' => $z->Amount,
            ]);
                    }
                        
            return view('admin', array('tab' => $myArray,'tab1' => $myArray1,'tab3' => $myArray3));
}

public function ajouter (Request $req) {
    return view('ajouter');
}

    function taieb(Request $req)
    {
        if($req){   
        $data= Product::all();
        return view ('taieb',['products'=>$data]);
    }else{echo 'eror';}
    }
   




public function ajouter1 (Request $req) {
    $var1=$req->nom;
    $var2=$req->prix;
    $var3=$req->qte;
    $var4=$req->id;
    $var5=$req->catégorie;
    $var6=$req->description;
    $var7=$req->gallerie;
    $var8=$req->promotion;
    $admin = DB::table('products')
        ->select('id')
        ->where('id', '=', $req->id)
        ->count();
        if($admin==0){
            DB::table('products')->insert([
                'name' => $var1,
                'price' => $var2,
                'price_promo' => $var2-(($var8*$var2)/100),
                'stock' => $var3,
                'id' => $var4,
                'catégorie' => $var5,
                'description' => $var6,
                'gallerie'=>$var7,
                'Promotion'=>$var8
            ]);
            return redirect ('http://localhost/cms2/public/admin3');
       }
       else{
        echo  "ID Déja existante, veuillez essayer avec une nouvelle ID " ;
        }
}
public function ajouterclient (){
    return view('ajouterclient');
}
public function suprimerproduit (Request $req) {
    $deleted = DB::table('products')->where('id','=',$req->rn)->delete();
    return redirect('http://localhost/cms2/public/admin3');
    }
public function ajouterclient1 (Request $req){
    $var11=$req->nom;
    $var22=$req->email;
    $var42=$req->mdp;
    $admin = DB::table('users')
        ->select('email')
        ->where('email', '=', $var22)
        ->count();
    if($admin==0){
    DB::table('users')->insert([
        'name' => $var11,
        'email' => $var22,
        
        'password' => $var42
    ]);
    return redirect('http://localhost/cms2/public/admin2');
}
else{
echo "Cette adresse email est déja existante.";
}
    
}
public function supprimerclient (Request $req) {
    $deleted = DB::table('users')->where('id','=',$req->rn)->delete();
    return redirect('http://localhost/cms2/public/admin2');
}
public function suprimercommande (Request $req) {
    $deleted = DB::table('orders')->where('id','=',$req->rn)->delete();
    return redirect('http://localhost/cms2/public/admin4');
}
public function modifierproduit() {
    $NUM3 = DB::table('products')
            ->select('*')
            ->where('id',  $_REQUEST['rh'])
            ->get();
            $myArray6 = [];
            $c=0;
            foreach($NUM3 as $z){
                $c++;
                array_push($myArray6, (object)[
                'name' => $z->name,
                'price' => $z->price,
                'qte' => $z->stock,
                'catégorie' => $z->catégorie,
                'description' => $z->description,
                'gallerie' => $z->gallerie,
                'promotion' => $z->Promotion,
                'id' => $z->id,
            ]);
                    }
                        
            return view('modifierproduit', array('tab' => $myArray6));
}

public function modifierproduit1 (Request $req) {
    $var100=$req->nom;
    $var200=$req->prix;
    $var300=$req->qte;
    $var400=$req->id;
    $var500=$req->catégorie;
    $var600=$req->description;
    $var700=$req->gallerie;
    $var800=$req->promotion;
    $affected = DB::table('products')
            ->where('id','=',$var400)
              ->update(['name' => $var100,'price' => $var200,'catégorie' => $var500,'description' => $var600,'gallerie' => $var700,'stock' => $var300,'Promotion' => $var800,'price_promo' => $var200-(($var200*$var800)/100)]);
              return redirect ('admin');
}
function adminlogin1 (Request $req){
    $var100=$req->adminname;
    $var200=$req->psw;
    $admin = DB::table('admins')
        ->select('*')
        ->where('mdp_admin', '=', $var200)
        ->where('nom_admin', '=', $var100)
        ->count();
        $info= DB::table('admins')
        ->select('nom_admin')
        ->where('mdp_admin', '=', $var200)
        ->where('nom_admin', '=', $var100);
        if ($admin>0) {
            $req->session()->put('admin',$admin);
           //$req->session()->put('users',$info);
            return redirect ('admin');
        }
        else {
            echo "Mot de passe ou login incorrectes";
        }
}
public function contactpage () {
    return view ('contactpage');
}
public function contactpage1 (Request $req) {
    $var99=$req->firstname;
    $var101=$req->lastname;
    $var102=$req->sujet;
    $var103=$req->email;
    $var104=$req->message;
    DB::table('commentaires')->insert([
        'nom' => $var99,
        'prenom' => $var101,
        'sujet' => $var102,
        'email'=> $var103,
        'message'=> $var104
    ]);
    return redirect('http://localhost/cms2/public/');
}
public function admincontact1 () {
    $NUM2 = DB::table('commentaires')
    ->select('*')
    ->get();
    $myArray = [];
    $i=0;
    foreach($NUM2 as $x){
        $i++;
        array_push($myArray, (object)[
        'id' => $x->id,
        'Nom' => $x->nom,
        'Prenom' => $x->prenom,
        'Sujet' => $x->sujet,
        'Message' => $x->message,

    ]);
    }
return view('admincontact1', array('tablo' => $myArray));
}
public function suprimercommentaire (Request $req) {
    $deleted = DB::table('commentaires')->where('id','=',$req->rn)->delete();
    return redirect('http://localhost/cms2/public/admincontact1');
}
public function repondrecommentaire1 (Request $req) {
    $deleted = DB::table('reponses')->insert([
        
        'nomadmin'=> $req->nomadmin,
        'idcomm' => $req->realid,
        'reponse' => $req->reponse
    ]);
    return redirect('http://localhost/cms2/public/admincontact1');
}
public function repondrecommentaire () {
    return view ('adminrepondre');
}
public function editapropos () {
    return view ('editapropos');
}
public function editapropos1 (Request $req) {
    $var1= $req->var1;
    $var2=$req->var2;
    $affected = DB::table('a propos')
    ->where('compt','=',1)
    ->update(['CONTACTNUM2' => $var1,'DESCRIPTIONSOC' => $var2]);
      return redirect ('admin');
}
public function index1 () {
    return view ('index2');
}
public function abonnement (Request $req) {
    $var1= $req->abonnement;
    $deleted = DB::table('abonnes')->insert([
        'email'=> $var1

    ]);
    return redirect('http://localhost/cms2/public/');
}
function modifiercommande() 
{
    return view ('modifiercommande');
}
public function modifiercommande1 (Request $req) {
    $var100=$req->MoyendePayment;
    $var200=$req->Etatdupaiement;
    $var400=$req->idcmd;
    $affected = DB::table('orders')
            ->where('id','=',$var400)
              ->update(['payment_method' => $var100,'payment_status' => $var200]);
              return redirect ('admin');
}
public function novoproduit() {
    return view ('novproduits');
}
public function remise() {
    return view ('remise1');
}
public function abonnes () {
    $NUM215 = DB::table('abonnes')
    ->select('*')
    ->get();
    $myArray00 = [];
    $i=0;
    foreach($NUM215 as $x){
        $i++;
        array_push($myArray00, (object)[
        'id' => $x->id,
        'email' => $x->email,

    ]);
    }
return view('abonnes', array('tablo1' => $myArray00));
}
public function supabon (Request $req) {
    $deleted = DB::table('abonnes')->where('id','=',$req->rn)->delete();
    return redirect('http://localhost/cms2/public/abonnes');

}
public function test() {
    return view ('test1');
}
function adminlogin () {
    return view ('test1');
}
function conproduit () {
    return view ('conproduit');
}
function ModifAdmin1 (){
    $NUM2 = DB::table('products')
    ->select('name','price','stock','id','Promotion','price_promo')
    ->get();
    $myArray = [];
    $i=0;
    foreach($NUM2 as $x){
        $i++;
        array_push($myArray, (object)[
        'Nom' => $x->name,
        'Prix' => $x->price,
        'Qte' => $x->stock,
        'ID' => $x->id,
        'Promotion' => $x->Promotion,
        'Prix_promo' => $x->price_promo
    ]);
            }
            $NUM2 = DB::table('users')
    ->select('name','email','id')
    ->get();
    $myArray1 = [];
    $t=0;
    foreach($NUM2 as $n){
        $t++;
        array_push($myArray1, (object)[
        'name' => $n->name,
        'email' => $n->email,
        'id' => $n->id,
        
    ]);
            }
            $NUM3 = DB::table('orders')
            ->select('*')
            ->get();
            $myArray3 = [];
            $c=0;
            foreach($NUM3 as $z){
                $c++;
                array_push($myArray3, (object)[
                'Adresse' => $z->adress,
                'IDClient' => $z->user_id,
                'IDProduit' => $z->product_id,
                'PM' => $z->payment_method,
                'PS' => $z->payment_status,
                'n' => $z->id,
                'nz' => $z->Amount,
            ]);
                    }
                        
            return view('admin2', array('tab' => $myArray,'tab1' => $myArray1,'tab3' => $myArray3));
}
function ModifAdmin2 (){
    $NUM2 = DB::table('products')
    ->select('name','price','stock','id','Promotion','price_promo')
    ->get();
    $myArray = [];
    $i=0;
    foreach($NUM2 as $x){
        $i++;
        array_push($myArray, (object)[
        'Nom' => $x->name,
        'Prix' => $x->price,
        'Qte' => $x->stock,
        'ID' => $x->id,
        'Promotion' => $x->Promotion,
        'Prix_promo' => $x->price_promo
    ]);
            }
            $NUM2 = DB::table('users')
    ->select('name','email','id')
    ->get();
    $myArray1 = [];
    $t=0;
    foreach($NUM2 as $n){
        $t++;
        array_push($myArray1, (object)[
        'name' => $n->name,
        'email' => $n->email,
        'id' => $n->id,
        
    ]);
            }
            $NUM3 = DB::table('orders')
            ->select('*')
            ->get();
            $myArray3 = [];
            $c=0;
            foreach($NUM3 as $z){
                $c++;
                array_push($myArray3, (object)[
                'Adresse' => $z->adress,
                'IDClient' => $z->user_id,
                'IDProduit' => $z->product_id,
                'PM' => $z->payment_method,
                'PS' => $z->payment_status,
                'n' => $z->id,
                'nz' => $z->Amount,
            ]);
                    }
                        
            return view('admin3', array('tab' => $myArray,'tab1' => $myArray1,'tab3' => $myArray3));
}
function ModifAdmin3 (){
    $NUM2 = DB::table('products')
    ->select('name','price','stock','id','Promotion','price_promo')
    ->get();
    $myArray = [];
    $i=0;
    foreach($NUM2 as $x){
        $i++;
        array_push($myArray, (object)[
        'Nom' => $x->name,
        'Prix' => $x->price,
        'Qte' => $x->stock,
        'ID' => $x->id,
        'Promotion' => $x->Promotion,
        'Prix_promo' => $x->price_promo
    ]);
            }
            $NUM2 = DB::table('users')
    ->select('name','email','id')
    ->get();
    $myArray1 = [];
    $t=0;
    foreach($NUM2 as $n){
        $t++;
        array_push($myArray1, (object)[
        'name' => $n->name,
        'email' => $n->email,
        'id' => $n->id,
        
    ]);
            }
            $NUM3 = DB::table('orders')
            ->select('*')
            ->get();
            $myArray3 = [];
            $c=0;
            foreach($NUM3 as $z){
                $c++;
                array_push($myArray3, (object)[
                'Adresse' => $z->adress,
                'IDClient' => $z->user_id,
                'IDProduit' => $z->product_id,
                'PM' => $z->payment_method,
                'PS' => $z->payment_status,
                'n' => $z->id,
                'nz' => $z->Amount,
            ]);
                    }
                        
            return view('admin4', array('tab' => $myArray,'tab1' => $myArray1,'tab3' => $myArray3));
}
function adminregister(){
    return view ('adminregister');
}
function adminregister1(Request $req){
  
    $var2=$req->email;
    $var3=$req->password;
    DB::table('admins')->insert([
        'nom_admin' => $var2,
        'mdp_admin' => $var3
        
        
    ]);
    return redirect ('/adminlogin');
}
}