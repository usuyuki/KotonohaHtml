<?php

use Illuminate\Database\Seeder;

class ScentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //参考http://www.kariginu.jp/kikata/takimono.htm
        //http://www.baikundo.co.jp/wordpress/6kinds_of_incenses/
        //六種の薫物→六種の薫物は、「梅花（ばいか）」・「荷葉（かよう）」・「侍従（じじゅう）」・「菊花（きっか）」・「落葉（らくよう）」・「黒方（くろぼう）」の六種類の香りです。鎌倉時代末期に記されたとされる香道の起源・香趣を説いた伝書である「後伏見院宸翰薫物方（ごふしみいんしんかんたきものほう）」などでは、それらを春夏秋冬になぞらえています。
        $param=[
            'name'=>'無し',
            'explain'=>'香り無し',
            'picture'=>'',
            

        ];
        $param=[
            'name'=>'梅花',
            'explain'=>'梅の花のような香り',
            'picture'=>'',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'荷葉',
            'explain'=>'蓮の花を思わせる香り',
            'picture'=>'',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'侍従',
            'explain'=>'ものの憐れさを思わせる香り',
            'picture'=>'',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'菊花',
            'explain'=>'菊の花のような香り',
            'picture'=>'',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'落葉',
            'explain'=>'葉の散る哀れさを思わせる香り',
            'picture'=>'',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'黒方',
            'explain'=>'深く懐かしい、落ち着いた香り',
            'picture'=>'',
            

        ];
        DB::table('scents')->insert($param);

    }
}
