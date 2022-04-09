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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('mobile',24)->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('language',10)->default('en');
            $table->string('country')->nullable();
            $table->string('education')->nullable();
            $table->string('document')->nullable();
            $table->string('avatar')->nullable();
            $table->text('about')->nullable();
            $table->string('password');
            $table->boolean('active')->default(0);
            $table->timestamp('vip_time')->nullable();
            $table->boolean('isAdmin')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
