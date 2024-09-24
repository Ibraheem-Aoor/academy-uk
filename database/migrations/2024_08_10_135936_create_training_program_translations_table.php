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
        Schema::create('training_program_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('quick_description');
            $table->text('description');
            $table->string('feature_1');
            $table->string('feature_2');
            $table->string('feature_3');
            $table->unsignedBigInteger('training_program_id');
            $table->foreign('training_program_id')->references('id')->on('training_programs')->onDelete('cascade');
            $table->string('locale');
            $table->unique(['locale' , 'training_program_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_program_translations');
    }
};
