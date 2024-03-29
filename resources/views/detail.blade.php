@extends('master')
@section("content")
<div class=" container ">
   <div class="row">
      <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallerie']}}" alt="">

    </div>
    <div class="col-sm-6" >
        <a  href="<?=config('app.url');?>/cms2/public/">Retour Arriére</a>
        <div class="badge badge-pill badge-info">{{$stock}}</FONT></div>
        <h2 style = "font-family:Calibri;font-size:30px;"><FONT COLOR=""black">Nom du produit : {{$product['name']}}</FONT></h2>
        <h2 style = "font-family:Calibri;font-size:30px;"><s><FONT COLOR="black"> Prix : {{$product['price']}} DT </FONT> </s></h2>
        <h2 style = "font-family:Calibri;font-size:30px;"><FONT COLOR="black"> Promotion : {{$product['Promotion']}} % </FONT> </s></h2>
        <h2 style = "font-family:Calibri;font-size:30px;"><FONT COLOR="Red"> Prix aprés promotion: {{$product['price_promo']}} DT</FONT> </h2>
        <h2 style = "font-family:Calibri;font-size:30px;"><FONT COLOR=""black">Description : {{$product['description']}}</FONT></h2>
        <h2 style = "font-family:Calibri;font-size:30px;"><FONT COLOR=""black  ">Catégorie : {{$product['catégorie']}}</FONT></h2>
        @if ($stock === 'disponible')
        <form action="<?=config('app.url');?>/cms2/public/detail/add_to_cart/{{$product['id']}}"  method="get">
        <h2> 
        <label style = "font-family:Calibri;font-size:30px;" for="tentacles">Quantité</label>
        <span >
        <input type="number" id="qte" name="quantity" placeholder="Entrer la qte souhaitée" 
        min="1" max= {{$product["stock"]}}  required value="1" >
        </span>
        </h2>
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button style = "font-family:Calibri;font-size:30px;" class="btn btn-primary">Ajouter au panier</button>
        </form>
        @endif
        <br><br>
        <form action="buynow/{{$product['id']}}"  method="get">
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        </form>
  
    </div>
</div>
</div>
@endsection
<style>
/*=== Import Raleway fonts ===*/
@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);


body,html{
  width:100%;
  height:100%;
  padding:0;
  margin:0;
  background:#e0e7e6;
}

#content{
  margin:10px auto;
background:#F7F7F1;
height:200px;
  width:70%;
/*border-radius*/
-webkit-border-radius:8px;
   -moz-border-radius:8px;
        border-radius:8px;
  -webkit-box-shadow:0 1px 0 rgba(0,0,0,.1);
   -moz-box-shadow:0 1px 0 rgba(0,0,0,.1);
        box-shadow:0 1px 0 rgba(0,0,0,.1);
}


.discount-label {
 padding:8px; 
 position:relative;
  float:left;
  margin-top:35px;
   margin-left:60px;
width:50px;
-webkit-border-radius:0 4px 0 4px;
-moz-border-radius:0 4px 0 4px;
border-radius:0 4px 4px 0;

}

.discount-label:after { 

    right: 100%; 
    border: solid transparent; content: " "; 
    height: 0; 
    width: 0; 
    position: absolute;
    border-color: rgba(136, 183, 213, 0);
     
    border-width: 20px; 
    top: 50%; 
    margin-top: -20px;} 

    .discount-label:before {
  content: '';
  z-index: 2;
  position: absolute;
  top: 42%;
  right: 100%;
  width: 7px;
  height: 7px;
  opacity: .95;
  background: #ffffff;
  border-radius: 7px;
  -webkit-box-shadow: inset .5px 0 rgba(0, 0, 0, 0.6);
  box-shadow: inset .5px 0 rgba(0, 0, 0, 0.6);

}


    .discount-label span {
      color:#ffffff;
  font-size:20px;
text-align:center;
  font-family:"Raleway",Helvetica;

}


.red{ 
background-color:#E80707; 
}

.red:after{ 
border-right-color: #E80707;
  
}


.blue{ 
background-color:#1883DB; 
}
.blue:after{ 
border-right-color: #1883DB; 
}

.green{ 
background-color:#16B516; 
}

.green:after{ 
border-right-color: #16B516;
}

.yellow{ 
background-color:#feaa00; 
}

.yellow:after{ 
border-right-color: #feaa00;
}

.gray{ 
background-color:#737373; 
}

.gray:after{ 
border-right-color: #737373;
}

.black{ 
background-color:#000; 

}

.black:after{ 
border-right-color: #000;
}

input:invalid+span:after {
  content: '✖';
  padding-left: 5px;
}

input:valid+span:after {
  content: '✓';
  padding-left: 5px;
}
</style>