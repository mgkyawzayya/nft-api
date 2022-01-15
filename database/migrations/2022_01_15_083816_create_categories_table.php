<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trait_type');
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('category_crypto', function (Blueprint $table) {
            $table->primary(['crypto_id', 'category_id']);

            $table->unsignedBigInteger('crypto_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('crypto_id')
                ->references('id')
                ->on('cryptos')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_crypto');
    }
}
