<?php

use Illuminate\Database\Seeder;

use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "email" => "yahagi1989@gmail.com",
            "password" => "welcome1"
        ]);
    }
}
