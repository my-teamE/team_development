<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('articles')) {
            // テーブルが存在していればリターンこのif文はautocommitがonの時は必要ない
            return;
        }

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            //外部キーのためにカラムを作成
            $table->integer('student_id');
            //こっちは外部キー制約をくっつけるだけでカラムは作らない
            $table->foreign('student_id')->references('student_id')->on('accounts')->onDelete('cascade');
            $table->integer('no');
            $table->string('title');
            $table->string('tag');
            $table->string('message');
            $table->string('image');
            $table->integer('status');
            $table->integer('heart')->default(0);
            $table->timestamps();
        });

        $qb = DB::table('events');
        $insert = [
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 1,
                'title' => 'Python勉強会',
                'tag' => '1',
                'message' => '参加者はPythonに関する基本的な知識を持っていることが望ましいですが、初心者も歓迎です。
                                持参するノートパソコンを忘れずに持参してください。
                                勉強会のスケジュールに変更がある場合は、事前に通知いたします。',
                'image' => 'image1.png',
                'status' => 1,
                'heart' => 0
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 2,
                'title' => 'Java勉強会',
                'tag' => '2',
                'message' => 'Javaプログラミングに興味がある方ならどなたでも参加できます。
                                勉強会の進行に合わせて、参加者同士で質問やアイデアの共有を奨励します。
                                Javaの開発環境を自分のノートパソコンにインストールしてくることをお勧めします。',
                'image' => 'image2.png',
                'status' => 1,
                'heart' => 0
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 3,
                'title' => 'フロンティアサイエンス・サミット',
                'tag' => '3',
                'message' => '参加者は科学と技術のフロンティアに関心を持つ方を対象としています。
                                セッションごとに異なるトピックが取り上げられるため、スケジュールを確認しておいてください。
                                質疑応答やディスカッションへの積極的な参加を歓迎します。',
                'image' => 'image3.png',
                'status' => 1,
                'heart' => 0
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 4,
                'title' => 'アカデミック・ビジョン・エクスポ',
                'tag' => '4',
                'message' => '学術的なビジョンとイノベーションに関心を持つ学生や研究者向けのイベントです。
                                ポスターセッションやプレゼンテーションがありますので、発表者は準備をしっかりとしてください。
                                イベントの参加登録が必要ですので、事前に登録をお願いします。',
                'image' => 'image4.png',
                'status' => 1,
                'heart' => 0
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 5,
                'title' => 'ハッカソンイベント',
                'tag' => '12',
                'message' => 'プログラミング、デザイン、アイデア出しに興味がある方は参加できます。
                                チームでの参加も可能ですが、個人参加でも大丈夫です。
                                イベント中はコードの共有やアイデアのブレインストーミングを積極的に行いましょう。',
                'image' => 'image5.png',
                'status' => 0,
                'heart' => 0
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 6,
                'title' => 'ECCイベント',
                'tag' => '23',
                'message' => 'ECCメンバー向けの内部イベントです。外部からの参加はできません。
                                イベントのステータスが"0"となっているため、詳細が発表されるまでお待ちください。
                                ECCメンバーはイベントに参加するための詳細情報をECC内で確認してください。',
                'image' => 'image6.png',
                'status' => 0,
                'heart' => 0
            ],
            [
                'id' => null,
                'student_id' => 2220415,
                'no' => 1,
                'title' => 'アート&クラフトワークショップ',
                'tag' => '34',
                'message' => 'アート&クラフト愛好者のためのワークショップです。様々な素材を使用して、
                                クリエイティブな作品を制作しましょう。経験者も初心者も歓迎です。',
                'image' => 'image7.png',
                'status' => 0,
                'heart' => 0

            ]



        ];
        $qb->insert($insert);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
