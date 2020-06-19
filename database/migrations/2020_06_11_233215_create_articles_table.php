<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_title');
            $table->longText('article_description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('author')->nullable();
            $table->boolean('featured')->default(false);
            $table->bigInteger('views')->nullable()->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')->on('categories')
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
        Schema::dropIfExists('articles');
    }
}
