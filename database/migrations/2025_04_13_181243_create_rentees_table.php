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
        Schema::create('rentees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('bio')->nullable();
            $table->foreignId('city')->nullable();
            $table->foreignId('state')->nullable();
            $table->foreignId('country')->nullable();
            $table->text('map_link')->nullable();
            $table->integer('total_views')->default(0);
            $table->boolean('verified')->default(false);
            $table->boolean('profile_complete')->default(0);
            $table->boolean('visibility')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentees');
    }
};
