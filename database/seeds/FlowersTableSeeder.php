<?php

use Illuminate\Database\Seeder;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'name'=>'菊',
            'explain_nowja'=>'「菊の色は移りにけりな……」と移り変わるものとして使われていました。',
            'explain_oldja'=>'移り変わりしものとして使われたり。',
            'picture'=>'',
            

        ];
        DB::table('flowers')->insert($param);
    }
}
