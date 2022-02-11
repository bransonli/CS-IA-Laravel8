<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments("id");
            $table->timestamps();
            $table->string("name");
            $table->string("description");
            $table->string("file_name");
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects'); 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
