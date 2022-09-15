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
        Schema::create('app_password_reset', function (Blueprint $table) {
            $table->id();
            $table->string('user_reference');
            $table->string('app_reference');
            $table->foreign('user_reference')->references('reference')->on('users');
            $table->foreign('app_reference')->references('reference')->on('apps');

            $table->string('token');
            $table->string('token_expiry');
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
        Schema::dropIfExists('app_password_reset');
    }
};
