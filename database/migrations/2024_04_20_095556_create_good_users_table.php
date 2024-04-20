<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('good_id');
            $table->unsignedBigInteger('user_id');

            $table->index('good_id', 'user_good_good_idx');
            $table->index('user_id', 'user_good_user_idx');

            $table->foreign('good_id', 'user_good_good_fk')->on('goods')->references('id');
            $table->foreign('user_id', 'user_good_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('good_users');
    }
}
