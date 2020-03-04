<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string ('costumer_id');
            $table->string ('costumer_table');
            $table->string ('costumer_image');
            $table->string ('costumer_price');
            $table->string ('costumer_discription');
            $table->string ('costumer_username');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}
