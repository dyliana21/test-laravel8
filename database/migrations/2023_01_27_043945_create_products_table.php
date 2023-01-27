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
            $table->string('description')->nullable();
            $table->string('qty')->nullable();
            $table->string('uom')->nullable();
            $table->string('price')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('vat')->nullable();
            $table->string('currency')->nullable();
            $table->decimal('vat_amount')->nullable()->default(0.00);
            $table->decimal('sub_total')->nullable()->default(0.00);
            $table->decimal('total')->nullable()->default(0.00);
            $table->string('charge_to')->nullable();
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
