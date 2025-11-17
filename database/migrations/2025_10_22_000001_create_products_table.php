<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('price');
            $table->string('currency');
            $table->string('sku')->unique();
            $table->integer('stock')->default(0);
            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
