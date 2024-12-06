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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('precio')->unsigned()->default(0);
            $table->string('nombre', 100)->default('Camisa');
            $table->string('color', 25)->nullable()->default('text');
            $table->string('marca', 50)->default('Camisa');
            $table->char('talla', 2)->default('text');
            $table->integer('stock')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};