<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('job_id')->uniqid();
            $table->string('job_title', 255);
            $table->string('job_category', 50);
            $table->string('job_type', 50);
            $table->string('job_qualification', 50);
            $table->string('job_experience', 50);
            $table->string('expected_salary', 50)->nullable();
            $table->string('job_location', 50);
            $table->string('job_email', 255)->nullable();
            $table->string('job_phone', 15)->nullable();
            $table->string('job_company', 100)->nullable();
            $table->string('application_url', 255)->nullable();
            $table->date('job_deadline');
            $table->longText('job_description');
            $table->string('company_logo', 255)->nullable();
            $table->boolean('onsite')->default(true);
            $table->bigInteger('views')->nullable()->default(0);
            $table->boolean('status')->default(true);
            $table->ipAddress('ip');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('jobs');
    }
}
