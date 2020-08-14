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
            'name'=>'無',
            'explain_nowja'=>'香り無し',
            'explain_oldja'=>'香り無し',
            'logo'=>'/img/mu.png',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'梅花',
            'explain_nowja'=>'梅の花のような香り',
            'explain_oldja'=>'うめの花の香に似たり',
            'logo'=>'/img/scents/ume.png',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'荷葉',
            'explain_nowja'=>'蓮の花を思わせる香り',
            'explain_oldja'=>'はすの花の香にかよへり',
            'logo'=>'/img/scents/hasu.png',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'侍従',
            'explain_nowja'=>'ものの憐れさを思わせる香り',
            'explain_oldja'=>'秋風蕭颯たる夕、心にくきおりふしものあはれんて、むかし覚ゆる匂によそへたり',
            'logo'=>'/img/scents/zizyou.png',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'菊花',
            'explain_nowja'=>'菊の花のような香り',
            'explain_oldja'=>'きくのはなむらうつろふ色。露にかほり水にうつす香にことならず',
            'logo'=>'/img/scents/kiku.png',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'落葉',
            'explain_nowja'=>'葉の散る哀れさを思わせる香り',
            'explain_oldja'=>'もみぢ散頃ほに出てまねくなる。すすきのよそほひも覚ゆるなり',
            'logo'=>'/img/scents/otiba.png',
            

        ];
        DB::table('scents')->insert($param);
        $param=[
            'name'=>'黒方',
            'explain_nowja'=>'深く懐かしい、落ち着いた香り',
            'explain_oldja'=>'ふかくさえたるに、あさからぬ気をふくめるにより、四季にわたりて、身にしむ色のなづかしき匂いかねたり',
            'logo'=>'/img/scents/kurobou.png',
            

        ];
        DB::table('scents')->insert($param);

    }
}
