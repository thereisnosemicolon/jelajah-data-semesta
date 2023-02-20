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
        Schema::create('jdm_management_news', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->unsignedBigInteger('user_id');                                      $table->foreign('user_id')->references('id')->on('users');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jdm_management_news');
    }
};
