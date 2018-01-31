<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('product_id')->nullable();
            $table->index('product_id', 'fk__tag_relations__product_id_idx');
            $table->foreign('product_id', 'fk__tag_relations__product_id')->references('id')->on('products')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->unsignedInteger('tag_id')->nullable();
            $table->index('tag_id', 'fk__tag_relations__tag_id_idx');
            $table->foreign('tag_id', 'fk__tag_relations__tag_id')->references('id')->on('tags')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_relations');
    }
}
