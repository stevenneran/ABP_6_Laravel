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
            $table->integer('price');
            $table->timestamps();
        });

        DB::statement("insert into products (id, name, price) 	values (1, 'ASUS', 15000000)");
        DB::statement("insert into products (id, name, price) 	values (2, 'Lenovo', 13500000)");
        DB::statement("insert into products (id, name, price) 	values (3, 'HP', 17000000)");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
