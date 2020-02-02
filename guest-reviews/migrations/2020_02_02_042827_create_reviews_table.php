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
        Schema::create('gr_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guest_id')->unsigned();;
            $table->string('text');
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
        Schema::table('gr_reviews', function (Blueprint $table) {
            Schema::dropIfExists('gr_reviews');
        });
    }
}
