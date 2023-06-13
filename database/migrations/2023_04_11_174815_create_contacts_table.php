<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');

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
        Schema::dropIfExists('contacts');
    }
}
