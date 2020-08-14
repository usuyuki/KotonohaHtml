<?php

use Illuminate\Database\Seeder;

class FoldsTableSeeder extends Seeder
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
            'explain_nowja'=>'折らずに送ります',
            'explain_oldja'=>'折らずに送ります',
            'logo'=>'/img/mu.png',
            'animation'=>'',
            

        ];
        DB::table('folds')->insert($param);

        $param=[
            'name'=>'結び文',
            'explain_nowja'=>'紙を細く巻いて結びます。恋文などで使用されました。',
            'explain_oldja'=>'紙細く巻きて結ぶ。恋文などに使はれし。',
            'logo'=>'/img/folds/musubibumi.png',
            'animation'=>'',
            

        ];
        DB::table('folds')->insert($param);

        $param=[
            'name'=>'立て文',
            'explain_nowja'=>'書状を紙で包みます。正式な手紙などで使用されました。',
            'explain_oldja'=>'書状を紙に包む。正式の文に使はれし。',
            'logo'=>'/img/folds/tatebumi.png',
            'animation'=>'',
            

        ];
        DB::table('folds')->insert($param);
    }
}
