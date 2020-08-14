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
            'name'=>'無',
            'explain_nowja'=>'紙を選びません',
            'explain_oldja'=>'紙を選びません',
            'logo'=>'/img/mu.png',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);
        $param=[
            'name'=>'和紙(楮)',
            'explain_nowja'=>'楮(こうぞ)を原料とした和紙です。',
            'explain_oldja'=>'楮を原料とせし和紙なり。',
            'logo'=>'/img/sheets/wasi.png',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);

        $param=[
            'name'=>'和紙(三椏)',
            'explain_nowja'=>'三椏(みつまた)を原料とした和紙です。',
            'explain_oldja'=>'三椏を原料とせし和紙なり。',
            'logo'=>'/img/sheets/wasi.png',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);

        $param=[
            'name'=>'和紙(雁皮)',
            'explain_nowja'=>'雁皮(がんぴ)を原料とした和紙です。',
            'explain_oldja'=>'雁皮を原料とせし和紙なり。',
            'logo'=>'/img/sheets/wasi.png',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);

        $param=[
            'name'=>'木簡',
            'explain_nowja'=>'荷札としてだけでなく、和歌を書いた歌木簡としても使われました。',
            'explain_oldja'=>'荷札ばかりならず、和歌を書くことにも使はれし。',
            'logo'=>'/img/sheets/mokkan.png',
            'design'=>'',
            

        ];
        DB::table('sheets')->insert($param);
    }
}
