<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

# migration時にテストデータを挿入する時migration順が最後のテーブルにはテストデータが挿入されない(autocommitがoffの場合)
# migration順最終番に意味の無いテーブルを持ってくる事で解決しています
# 新しいmigrationファイルを作成する際はこのファイルの時間表記を弄ってmigration順の最後に持ってくるようにしてください
class CreateHogesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoges', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoges');
    }
}
