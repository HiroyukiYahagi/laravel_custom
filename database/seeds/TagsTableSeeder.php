<?php

use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            "label" => "Swift",
            "color" => "#CC528B",
        ]);

        Tag::create([
            "label" => "PHP",
            "color" => "#CC528B",
        ]);

        Tag::create([
            "label" => "AngularJS",
            "color" => "#CC528B",
        ]);

        Tag::create([
            "label" => "React",
            "color" => "#CC528B",
        ]);

        Tag::create([
            "label" => "Vue",
            "color" => "#CC528B",
        ]);


        Tag::create([
            "label" => "Blog",
            "color" => "#9460A0",
        ]);

        Tag::create([
            "label" => "SNS",
            "color" => "#9460A0",
        ]);

        Tag::create([
            "label" => "Web Site",
            "color" => "#9460A0",
        ]);
    }
}
