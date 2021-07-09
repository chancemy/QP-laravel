<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('type_id')->comment('分類');
            $table->string('name')->comment('品名');
            $table->integer('price')->comment('價錢');
            $table->string('unit')->comment('單位')->nullable();
            $table->longText('img')->comment('主要圖片');
            $table->text('discript')->comment('描述');
            $table->longText('content')->comment('內容物');
            $table->date('start_date')->comment('上架日期')->nullable();
            $table->date('end_date')->comment('下架日期')->nullable();

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
}
