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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
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
                'tag' => '勉強会',
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
                'tag' => '勉強会',
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
                'tag' => 'イベント',
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
