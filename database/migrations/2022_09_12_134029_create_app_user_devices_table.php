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
        Schema::create('app_user_devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_id')->unique();
            $table->string('user_reference');
            $table->string('app_reference');

            $table->foreign('app_reference')->references('reference')->on('apps');

            $table->foreign('user_reference')->references('reference')->on('users');

            $table->string('status')->default('active');
            $table->string('reference')->unique();

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
        Schema::dropIfExists('app_user_devices');
    }
};
