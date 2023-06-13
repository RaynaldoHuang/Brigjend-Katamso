<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktc', function (Blueprint $table) {
            $table->id();
            $table->string('image');

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
        Schema::dropIfExists('ktc');
    }
}
