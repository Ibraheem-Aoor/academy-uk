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
        Schema::create('fam_project_category_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('fpc_id')->comment('fam project category id');
            $table->foreign('fpc_id')->references('id')->on('fam_project_categories')->onDelete('cascade');
            $table->string('locale');
            $table->unique(['fpc_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fam_project_category_translations');
    }
};
