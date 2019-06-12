<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShishaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shishas', function(Blueprint $table){
            $table->increments('id');
            $table->string('unique_id');
            $table->string('name');
            $table->string('view_count')->default(0);
            $table->double('price');
            $table->string('description');
            $table->string('image')->nullable();
            $table->integer('status')->default(0);
            $table->integer('category_id');
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('category')
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
        Schema::dropIfExists('shishas');
    }
}
