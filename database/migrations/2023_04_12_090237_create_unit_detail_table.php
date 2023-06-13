<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_details', function (Blueprint $table) {
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->string('title');
            $table->string('alt');
            $table->string('image');
            $table->text('description');
            $table->boolean('is_published')->default(true);
            $table->primary('unit_id');

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
        Schema::dropIfExists('unit_details');
    }
}
