<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobslugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobslugs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->string('title_slug',200)->nullable();
            $table->string('category_slug',200)->nullable();
            $table->string('type_slug',30)->nullable();
            $table->string('qualification_slug',30)->nullable();
            $table->string('experience_slug',30)->nullable();
            $table->string('company_slug',30)->nullable();
            $table->timestamps();

            $table->foreign('job_id')
            ->references('id')->on('jobs')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobslugs');
    }
}
