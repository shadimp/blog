<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Newsimagepathseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("newsimages")->insert([
            [
                "newsid" => '8',
                "imagepath" => '../uploads/spf.jpg',
                "updated_at" =>now(),
                "created_at"=>now()
            ],
                       
        ]);
    }
}
