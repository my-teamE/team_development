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
            $table->string('date');
            $table->timestamps();
        });

        $qb = DB::table('events');
        $insert = [
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 1,
                'title' => 'Python勉強会',
                'tag' => '2',
                'message' => '注意事項1',
                'image' => 'image1.png',
                'status' => 1,
                'date' => '7月7日'
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 2,
                'title' => 'Java勉強会',
                'tag' => '2',
                'message' => '注意事項2',
                'image' => 'image2.png',
                'status' => 1,
                'date' => '7月8日'
            ],
            [
                'id' => null,
                'student_id' => 2220415,
                'no' => 1,
                'title' => 'ハッカソンイベント',
                'tag' => '1',
                'message' => '注意事項3',
                'image' => 'image3.png',
                'status' => 1,
                'date' => '8月23日'
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
