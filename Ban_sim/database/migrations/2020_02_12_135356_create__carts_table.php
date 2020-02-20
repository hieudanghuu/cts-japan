<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_carts', function (Blueprint $table) {
            $table->bigIncrements('sim_id');
            $table->string('sim_name');
            $table->double('sim_price');
            $table->longText('sim_image')->nullable();
            $table->string('deleted_at')->nullable()->default('null');
            $table->unsignedBigInteger('sim_category_id');
            $table->foreign('sim_category_id')->references('sim_category_id')->on('sims');
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
        Schema::dropIfExists('_carts');
    }
}
