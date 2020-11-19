<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText("content")->nullable();;
            $table->longText("photo")->nullable();
            $table->integer("rating")->default(5);
            $table->bigInteger("product_id")->unsigned();; //
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->bigInteger("user_id")->unsigned();; //
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");


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
        Schema::dropIfExists('reviews');
    }
}
