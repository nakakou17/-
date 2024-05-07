<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キー
            //'cascade'は親テーブルの操作を子テーブルにも繁栄させること
            //onDelete('cascade')によって削除時のcascadeを設定する
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
