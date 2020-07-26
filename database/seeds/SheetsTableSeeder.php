<?php

use Illuminate\Database\Seeder;

class SheetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'name'=>'和紙(楮)',
            'explain'=>'楮(こうぞ)を原料とした和紙です。',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);

        $param=[
            'name'=>'和紙(三椏)',
            'explain'=>'三椏(みつまた)を原料とした和紙です。',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);

        $param=[
            'name'=>'和紙(雁皮)',
            'explain'=>'雁皮(がんぴ)を原料とした和紙です。',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);

        $param=[
            'name'=>'木簡',
            'explain'=>'荷札としてだけでなく、和歌を書いた歌木簡としても使われました。',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);
    }
}
