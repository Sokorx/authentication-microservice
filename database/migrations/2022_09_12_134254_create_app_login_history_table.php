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
        Schema::create('app_login_history', function (Blueprint $table) {
            $table->id();
            $table->string('app_user_device_reference');
            $table->foreign('app_user_device_reference')->references('reference')->on('app_user_devices');

            $table->string('ip_address');
            $table->boolean('is_successful');
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
        Schema::dropIfExists('app_login_history');
    }
};
