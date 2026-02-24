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
        Schema::create('personalized_solution_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personalized_solution_id');
            $table->string('file_path', 500);
            $table->string('original_filename')->nullable();
            $table->string('file_type', 50)->nullable();
            $table->timestamps();

            $table->foreign('personalized_solution_id', 'ps_att_solution_fk')
                ->references('id')
                ->on('personalized_solutions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalized_solution_attachments');
    }
};
