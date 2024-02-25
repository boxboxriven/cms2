<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TestModel;
use App\view;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
public function find()
{	
return view('search');			
}		
public function findSearch(request $req)
{			
    $search=$req->search;
	
$NUM2 = DB::table('products')	
->select('*')
->where  ( 'name', 'LIKE', '%' . $search . '%' )
->get();
if (count ( $NUM2 ) > 0)
return view ( 'search' ,['products'=>$NUM2]);
else
return view ( 'search' ,['productsnot'=>"Pas de resultats"]);		
}
}