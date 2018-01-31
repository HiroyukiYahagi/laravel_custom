<?php

use Illuminate\Database\Seeder;

use App\Models\ProductType;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::create([
            "label" => "アプリ",
            "color" => "#DE9610",
            "icon" => "desktop"
        ]);
        
        ProductType::create([
            "label" => "WEBサイト",
            "color" => "#A0C238",
            "icon" => "phone"
        ]);

        ProductType::create([
            "label" => "ツール",
            "color" => "#0074BF",
            "icon" => "cog"
        ]);
    }
}
