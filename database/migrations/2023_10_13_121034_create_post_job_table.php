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
        Schema::create('post_job', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_region');
            $table->string('job_type');
            $table->string('vacancy');
            $table->string('experience');
            $table->string('salary');
            $table->string('gender');
            $table->string('application_deadline');
            $table->string('jobdescription');
            $table->string('responsibilities');
            $table->string('education_experience');
            $table->string('otherbenifits');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_job');
    }
};
