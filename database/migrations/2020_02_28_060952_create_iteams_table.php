<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($tableNames['iteams'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string ('iteam_name');
            $table->string ('iteam_price');
            $table->string ('iteam_discription');
            $table->string ('iteam_type');
            $table->string ('iteam_time');
        });

        Schema::create($tableNames['category'], function (Blueprint $table) use ($tableNames) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('category_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iteams');
    }
}
