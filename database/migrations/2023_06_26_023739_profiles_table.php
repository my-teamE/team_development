<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProfilesTable extends Migration
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

        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->unique();
            $table->string('class');
            $table->string('github_url')->unique();
            $table->string('skill');
            $table->string('comment');
            $table->timestamps();
        });

        $qb = DB::table('profiles');
        $insert = [
            [
                'id' => null,
                'student_id' => 2220399,
                'class' => 'IE2A',
                'github_url' => '2220399.github.url',
                'skill' => 'laravel',
                'comment' => '頑張ります'
            ],
            [
                'id' => null,
                'student_id' => 2220415,
                'class' => 'IE2A',
                'github_url' => '2220415.github.url',
                'skill' => 'java',
                'comment' => 'よろしく'
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
