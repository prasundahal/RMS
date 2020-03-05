<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('table_number');
            $table->string('table_capicity');
            $table->string ('iteam_name');
            $table->string ('iteam_price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tableorders');
    }
}
