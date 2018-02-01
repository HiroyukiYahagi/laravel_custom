<?php

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "title" => "& Vege",
            "description" => "弁当屋さんのフランチャイズです",
            "image_url" => "http://and-vege.com/image/system/background.png",
            "url" => "http://and-vege.com",
            "started_at" => "2017-09-20",
            "released_at" => "2017-10-01",
            "product_type_id" => 1,
        ]);

        Product::create([
            "title" => "EATAS",
            "description" => "飲食店経営者向けメディア",
            "image_url" => "http://and-vege.com/image/system/background.png",
            "url" => "http://and-vege.com",
            "started_at" => "2017-09-20",
            "released_at" => "2017-10-01",
            "product_type_id" => 1,
        ]);
    }
}
