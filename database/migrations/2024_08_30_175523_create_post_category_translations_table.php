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
        Schema::create('post_category_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('locale');
            $table->unsignedBigInteger('post_category_id')->comment('post category id');
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');
            $table->unique(['post_category_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_category_translations');
    }
};
