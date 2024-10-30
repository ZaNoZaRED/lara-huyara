<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id'); // Добавляем поле user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Устанавливаем внешний ключ
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Удаляем внешний ключ
            $table->dropColumn('user_id'); // Удаляем поле user_id
        });
    }
}

