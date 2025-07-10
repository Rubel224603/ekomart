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
            $table->id();
            $table->string('name');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('code');
            $table->double('product_price');
            $table->double('selling_price');
            $table->integer('stock');
            $table->tinyInteger('published_status')->default(1);
            $table->string('sort_description');
            $table->text('long_description');
            $table->text('image');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('hit_count')->default(0);
            $table->integer('sales_count')->default(0);
            $table->tinyInteger('feature_status')->default(0);

            $table->timestamps();
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
