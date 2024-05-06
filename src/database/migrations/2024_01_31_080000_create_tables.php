<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('profile');
            $table->string('password');
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->text('content');
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId')->nullable();
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedBigInteger('answerId')->nullable();
            $table->foreign('answerId')->references('id')->on('answers')->onDelete('set null');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::dropIfExists('users');
            Schema::dropIfExists('answers');
            Schema::dropIfExists('questions');
        });
    }
};
