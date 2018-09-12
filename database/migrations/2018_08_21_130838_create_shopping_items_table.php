<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('type');
            $table->string('price');
            $table->longText('description')->nullable();
            $table->float('rating', 2, 2)->nullable();
            $table->dateTime('delivery')->nullable();
            $table->longText('information')->nullable();
            $table->longText('image_url_1');
            $table->longText('image_url_2');            
            $table->longText('image_url_3'); 
            $table->longText('image_url_4');             
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
        Schema::dropIfExists('shopping_items');
    }
}
