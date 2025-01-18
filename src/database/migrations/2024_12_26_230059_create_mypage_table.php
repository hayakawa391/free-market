<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMypageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypage', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('sell',100);
            $table->string('buy',100);
            $table->timestamps('created_at')->useCurrent()->nullable();
            $table->timestamps('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mypage');
    }
}
