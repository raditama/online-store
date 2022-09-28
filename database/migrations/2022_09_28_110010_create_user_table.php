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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->string('email')->nullable();
            $table->integer('phone_number')->nullable();
            $table->unsignedBigInteger('role')->nullable();
            $table->integer('active');
            $table->string('password');
            $table->integer('count_failed')->nullable();
            $table->timestamps();
        });

        Schema::table('user', function (Blueprint $table) {
            $table->foreign('role')->references('id')->on('role');
        });

        Schema::table('role', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('user');
            $table->foreign('updated_by')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
