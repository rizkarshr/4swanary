<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('product_pict')->nullable();
            $table->text('desc')->nullable();
            $table->string('hs_code');
            $table->string('dimension')->nullable();
            $table->integer('id_subcategory');
            $table->integer('id_indonesia_province');
            $table->integer('id_indonesia_city');
            $table->integer('id_company');
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
        Schema::dropIfExists('products');
    }
};
