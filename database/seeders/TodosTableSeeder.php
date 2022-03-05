<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '病院に行く'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'メガネを作る'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => '洗剤を買う'
        ];
        DB::table('todos')->insert($param);
    }
}
