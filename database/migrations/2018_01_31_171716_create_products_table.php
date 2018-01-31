<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('released_at')->nullable();
            $table->string('title', 256)->nullable();
            $table->mediumText('description')->nullable();
            $table->string('image_url', 256)->nullable();
            $table->string('url', 256)->nullable();
            $table->timestamps();
            $table->unsignedInteger('product_type_id')->nullable();

            $table->index('product_type_id', 'fk__products__product_type_id_idx');
            $table->foreign('product_type_id', 'fk__products__product_type_id')->references('id')->on('product_types')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
        Schema::enableForeignKeyConstraints();
    }
}
