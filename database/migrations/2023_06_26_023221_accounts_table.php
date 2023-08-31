<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AccountsTable extends Migration
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

        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->timestamps();
        });

        $qb = DB::table('accounts');
        $insert = [
            [
                //自動的に生成されるため、nullを指定
                'id' => null,
                'student_id' => 2220399,
                'name' => '道上康介',
                'email' => '2220399@ecc.ac.jp',
                'password' => '12345678',
                'gender' => 'man'

            ],
            [
                'id' => null,
                'student_id' => 2220415,
                'name' => '市島功大',
                'email' => '2220415@ecc.ac.jp',
                'password' => 'password',
                'gender' => 'man'

            ],
            [
                'id' => null,
                'student_id' => 2220061,
                'name' => 'VUONG THE SON',
                'email' => '2220061@ecc.ac.jp',
                'password' => 'son',
                'gender' => 'man'

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
