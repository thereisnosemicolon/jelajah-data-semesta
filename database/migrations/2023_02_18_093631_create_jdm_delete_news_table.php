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
        Schema::create('jdm_delete_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id')->nullable();                      $table->foreign('news_id')->references('id')->on('jdm_management_news')->onUpdate('cascade')->onDelete('cascade');
            $table->text('title');
            $table->unsignedBigInteger('user_id');                                 $table->foreign('user_id')->references('id')->on('users');
            $table->date('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jdm_delete_news');
    }
};