<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('email');
            $table->string('app_reference');
            $table->string('user_reference');
            $table->foreign('app_reference')->references('reference')->on('apps');
            $table->foreign('user_reference')->references('reference')->on('users');

            $table->string('password');
            $table->string('reference')->unique();
            $table->string('phone_number');

            $table->string('verification_token')->nullable();
            $table->timestamp('verification_token_expiry')->nullable();
            $table->timestamp('verified_at')->nullable();

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
        Schema::dropIfExists('app_users');
    }
};
