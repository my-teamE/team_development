<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApplydatasTable extends Migration
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

        Schema::create('applydatas', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('no');
            $table->integer('apply_user_code');
            $table->string('status');
            $table->timestamps();
        });

        $qb = DB::table('applydatas');
        $insert = [
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 1,
                'apply_user_code' => 2220415,
                'status' => '0'
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 2,
                'apply_user_code' => 2220415,
                'status' => '0'
            ],
            [
                'id' => null,
                'student_id' => 2220415,
                'no' => 1,
                'apply_user_code' => 2220399,
                'status' => '0'
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
