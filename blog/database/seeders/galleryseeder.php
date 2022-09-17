<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gallery extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("galleries")->insert([
            [
                "type" => 'jpg',
                "imagepath" => '../uploads/spf.jpg',
                "updated_at" => now(),
                "created_at" => now()
            ],

        ]);
    }
}
