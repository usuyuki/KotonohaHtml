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
            'name'=>'結び文',
            'explain'=>'紙を細く巻いて結びます。恋文などで使用されました。',
            'animation'=>'',
            

        ];
        DB::table('folds')->insert($param);

        $param=[
            'name'=>'立て文',
            'explain'=>'書状を紙で包みます。正式の手紙に使われていました。',
            'animation'=>'',
            

        ];
        DB::table('folds')->insert($param);
    }
}
