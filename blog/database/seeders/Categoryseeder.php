<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("Categories")->insert([
            [
                "title" => 'اجتماعی',
                "have_subgroup" => false,
                "updated_at" =>now(),
                "created_at"=>now()
            ],
            [
                "title" => 'ورزشی',
                "have_subgroup" => false,
                "updated_at" =>now(),
                "created_at"=>now()
            ],
            [
                "title" => 'زنان',
                "have_subgroup" => false,
                "updated_at" =>now(),
                "created_at"=>now()
            ],
            
        ]);
    }
}
