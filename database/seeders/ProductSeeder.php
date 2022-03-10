<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB ::table('products')->insert([
            [
            'name'=>'GTX 950m',
            'price'=>'105$',
            'description'=>'brand new',
            'catégorie'=>'electronic',
            "gallerie"=>"https://fr.shopping.rakuten.com/photo/1575694614_ML_NOPAD.jpg "
                   ],
            [
            'name'=>'RTX 3060',
            'price'=>'220$',
            'description'=>'Used',
            'catégorie'=>'electronic',
            "gallerie"=>"https://www.tunisianet.com.tn/220790-large/carte-graphique-zotac-geforce-rtx-3060-ti-twin-edge-8gb.jpg"
            ],
            [
            'name'=>'RTX 3090 Ti',
            'price'=>'550$',
            'description'=>'Used',
            'catégorie'=>'electronic',
            "gallerie"=>"https://media.ldlc.com/r1600/ld/products/00/05/72/60/LD0005726010_1.jpg"
            ],
            [
            'name'=>'RTX 2060',
            'price'=>'400$',
            'description'=>'Used',
            'catégorie'=>'electronic',
            "gallerie"=>"https://media.ldlc.com/r1600/ld/products/00/05/84/37/LD0005843776_1.jpg"
            ]
        ]);
    }
}
