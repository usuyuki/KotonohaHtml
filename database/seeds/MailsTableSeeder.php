<?php

use Illuminate\Database\Seeder;

class MailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'for'=>'なおふみくん',
            'from'=>'こうや',
            'text'=>'このコンセプト面白い！',
            'scent_id'=>'6',
            'flower_id'=>'2',
            'sheet_id'=>'2',
            'fold_id'=>'2',
            'uuid'=>'5759389f-808d-4dc7-abe0-df309d7867ea',
        ];
        DB::table('scents')->insert($param);

        $param=[
            'for'=>'なおふみ',
            'from'=>'かずま	',
            'text'=>'やっほー届いてる？',
            'scent_id'=>'2',
            'flower_id'=>'2',
            'sheet_id'=>'2',
            'fold_id'=>'2',
            'uuid'=>'b350f1d6-d337-4bc5-a96c-34d083ff3f19',
        ];
        DB::table('scents')->insert($param);

        $param=[
            'for'=>'小畑くん',
            'from'=>'石栗',
            'text'=>'Hello world!',
            'scent_id'=>'4',
            'flower_id'=>'2',
            'sheet_id'=>'4',
            'fold_id'=>'2',
            'uuid'=>'86052d82-e33b-45bc-9d65-519a055e7e2b',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'pvpvpvsourse@yahoo.co.jp',
            'from'=>'you@com',
            'text'=>'Hello. Good bye.',
            'scent_id'=>'2',
            'flower_id'=>'2',
            'sheet_id'=>'2',
            'fold_id'=>'2',
            'uuid'=>'74d2edb5-19b5-4a6b-8669-5aef36ee52cd',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'twilight.sky.bbb@gmail.com',
            'from'=>'twilight.sky.bbb@gmail.com',
            'text'=>'拝啓、20の君へ',
            'scent_id'=>'6',
            'flower_id'=>'1',
            'sheet_id'=>'4',
            'fold_id'=>'2',
            'uuid'=>'cc6de435-f4b6-4cbc-8504-dc50ff4bd372',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'あい',
            'from'=>'はら',
            'text'=>'です',
            'scent_id'=>'1',
            'flower_id'=>'2',
            'sheet_id'=>'2',
            'fold_id'=>'2',
            'uuid'=>'11ee68f2-f6ed-474d-a491-8fc8e773a5ff',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'杉田',
            'from'=>'猿子',
            'text'=>'こんばんは。',
            'scent_id'=>'7',
            'flower_id'=>'2',
            'sheet_id'=>'3',
            'fold_id'=>'2',
            'uuid'=>'3120aaa0-1b3c-48d7-b35f-a6de029cb697',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'みまり',
            'from'=>'んりま',
            'text'=>'試しにやってみました',
            'scent_id'=>'2',
            'flower_id'=>'2',
            'sheet_id'=>'5',
            'fold_id'=>'2',
            'uuid'=>'7436e929-116b-47dc-82e9-bc4b3b0e0e98',
        ];
        DB::table('scents')->insert($param);
        
        $param=[
            'for'=>'なおふみ',
            'from'=>'かずま',
            'text'=>'なほふみ 今度web会とは別になほふみにcss講座せまほしと言へり。 あらましとせば神無月十日をあらませり。 あらましや空くらむ？ あと浅野も誘はむと思へれど、なほふみより誘はすとも安穏なりや？ 返信待ちたてまつれり。 かずま',
            'scent_id'=>'2',
            'flower_id'=>'2',
            'sheet_id'=>'2',
            'fold_id'=>'2',
            'uuid'=>'548d31dc-b239-4dbd-b84f-58cc384c54b2',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'飯泉先輩',
            'from'=>'小畑尚史',
            'text'=>'わざわざ古語にて懇ろなる御文つかはし、嬉しきこと限りなし。 神有月十日のあらましは空けり。 されど我まどひし。 我力あらましかば、すなはち受けまし。 我のcssの力いふかひなし。 我が新しきwebサービスなりし「しののめ」にcss,htmlを書けど、えぬことまどひけり。 なほ最近始めしProgateの有料道筋にも、げに自身の力不足を感じき。 されどありがたしついでなれば、いかで断はる。 浅野とも関はりもつひまにえ、また教ふること、いとど我が身およすくこと限りなし。 先輩ののたまひしこと、我うけたまはりたし。',
            'scent_id'=>'6',
            'flower_id'=>'1',
            'sheet_id'=>'4',
            'fold_id'=>'3',
            'uuid'=>'1b0c0c91-d5f8-40a5-81f9-440f7e412f9f',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'なおふみ',
            'from'=>'かずま',
            'text'=>'ごめんなさい 自分が悪かった... 日本語でお願いします笑',
            'scent_id'=>'4',
            'flower_id'=>'1',
            'sheet_id'=>'2',
            'fold_id'=>'1',
            'uuid'=>'11a59928-0bd1-443a-9106-a6e00b4c8b8b',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'飯泉先輩',
            'from'=>'小畑尚史',
            'text'=>'わざわざ古語で送ってくださりありがとうございます笑 自分も久しぶりに古語に触れる機会ができて楽しかったです。 LINEで返信しようかと思いましたが、折角なので言の葉で返しますね。 手紙だと気合が入って長くなってしまいましたが、先に結論を述べますとお受けする方針で行きたいです。 というのも十月十日の予定は空いているのですが私のcssの力に不安がありまして… 今作成中のSNS「しののめ」でcssとhtmlを書く際に、あまりのできなさに気づいたことに加え、最近始めたProgateの有料コースでも自身の力不足を感じました。 ですが折角の貴重な機会で提案まで頂いたので、やはりお受けしたいと思っています。 浅野くんと関わりをもつきっかけにもなり、また教えることで自身の成長にもつながるかと存じます。',
            'scent_id'=>'3',
            'flower_id'=>'1',
            'sheet_id'=>'3',
            'fold_id'=>'3',
            'uuid'=>'34bb9673-1b61-4471-b9e5-09eb01d56caf',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'なおふみ',
            'from'=>'かずま',
            'text'=>'ごめんごめんちょっとだけ意図を伝え間違えたかも笑(古語だからだな！笑) 樋口的にはなおふみくんにlaravelはしっかり教えることができたから、laravelは大丈夫だから cssもしっかり教えてあげたいみたい(小技とか、コツみたいなのとかも)笑 だからどちらかというと樋口がなおふみくんに教えてる会みたいになっちゃうかも笑 浅野くんも前回cssには興味あるって言ってたから浅野くんにも来てもらったほうが みんなで学べて良いかなって感じだよ！ 浅野くんには10/10が空いてるか聞いてほしいです！ まじで古語で申し訳ない笑',
            'scent_id'=>'6',
            'flower_id'=>'2',
            'sheet_id'=>'3',
            'fold_id'=>'2',
            'uuid'=>'17113142-8fa4-443b-99f4-4278f6c93d3f',
        ];
        DB::table('scents')->insert($param);

        $param=[
            'for'=>'まよ',
            'from'=>'かずま',
            'text'=>'こんな感じで文を送れるから、Lineより言いづらいことを言える、みたいな',
            'scent_id'=>'2',
            'flower_id'=>'1',
            'sheet_id'=>'3',
            'fold_id'=>'2',
            'uuid'=>'050bae3e-bcaf-4ba9-a381-6b002f6d6ba1',
        ];
        DB::table('scents')->insert($param);
        $param=[
            'for'=>'やん',
            'from'=>'カズマアイ',
            'text'=>'無',
            'scent_id'=>'1',
            'flower_id'=>'1',
            'sheet_id'=>'1',
            'fold_id'=>'1',
            'uuid'=>'f199f255-7672-444a-9f8c-9f2acb5924a6',
        ];
        DB::table('scents')->insert($param);

    }
}
