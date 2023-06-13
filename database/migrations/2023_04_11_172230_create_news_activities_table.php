<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->longText('content');
            $table->boolean('status')->default(1);

            $table->timestamp('created_at')->nullable();
            $table->integer('created_by', 0, 1)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by', 0, 1)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('deleted_by', 0, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_activities');
    }
}
