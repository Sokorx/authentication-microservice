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
        Schema::create('app_user_devices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('app_id')->constrained('apps');
            $table->foreignUuid('user_id')->constrained('users');
            $table->string('device_id')->unique();
            $table->string('session_ip');
            $table->enum('session_status', ['in_session', 'no_session'])->default('in_session');
            // $table->string('session_status')->default('in_session')->comment('in_session, no_session');
            $table->timestamp('last_login_at', $precision = 0);
            $table->timestamp('last_session_at', $precision = 0)->nullable();
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
