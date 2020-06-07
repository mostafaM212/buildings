<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bu', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('bu_name',100) ;
            $table->integer('bu_price');
            $table->tinyInteger('bu_rent');
            $table->string('bu_square',10);
            $table->tinyInteger('bu_type') ;
            $table->string('bu_small_dis',160);
            $table->string('bu_meta',200);
            $table->string('bu_langtuide',50);
            $table->string('bu_latitude',50);
            $table->tinyInteger('bu_status');
            $table->text('bu_large_dis') ;
            $table->integer('user_id')->nullable() ;
            $table->integer('rooms') ;
            $table->string('image')->default('bu_image/1.jpg') ;
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
        Schema::dropIfExists('bu');
    }
}
