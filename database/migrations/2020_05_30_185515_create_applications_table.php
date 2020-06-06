<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('contact', 14);
            $table->string('email', 100);
            $table->string('employee_cv',100);
            $table->string('cover_letter', 100)->nullable();
            $table->timestamps();

            $table->foreign('application_id')
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
        Schema::dropIfExists('applications');
    }
}
