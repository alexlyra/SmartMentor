<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_custom_parameters', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('key');
            $table->string('type');
            $table->longText('content');
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->timestamp('deleted_at');

            /* 3 => mentoring_type => paid */
            /* 3 => mentoring_price => 150.0 */
            /* 3 => mentoring_face-to-face => true */
            /* 3 => city => São Paulo | 1 | */
            /* 3 => state => São Paulo | 1 | */
            /* 3 => neighborhood => Cambuci | 1 | */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_custom_parameters');
    }
}
