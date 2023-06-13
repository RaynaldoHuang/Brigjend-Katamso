<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_extras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->string('name');
            $table->string('alt')->nullable();
            $table->string('image');
            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('unit_extras');
    }
}
