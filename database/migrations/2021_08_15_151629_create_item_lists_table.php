<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campany_id');
            $table->unsignedBigInteger('catagory_id');
            $table->string('item_name');
            $table->unsignedBigInteger('image_id');

            $table->string('brand');
            $table->string('color');
            $table->string('condition');
            $table->double('price');

            $table->string('size');
            $table->string('status')->default('pending');
            $table->foreign('campany_id')->references('id')->on('users');

            $table->foreign('catagory_id')->references('id')->on('catagory_lists');
            $table->foreign('image_id')->references('id')->on('item_images');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_lists');
    }
}
