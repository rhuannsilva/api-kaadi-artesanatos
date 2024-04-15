<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('description');
            $table->integer('category_id');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->integer('price');
            $table->integer('status');
            $table->date('creation_date');
            $table->string('creation_user');
            $table->date('change_date')->nullable();
            $table->string('change_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
