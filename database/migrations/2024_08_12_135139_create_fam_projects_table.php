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
        Schema::create('fam_projects', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('fam_project_categories')->onDelete('cascade');
            $table->boolean('status')->default(1);
            $table->boolean('show_in_home')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fam_projects');
    }
};
