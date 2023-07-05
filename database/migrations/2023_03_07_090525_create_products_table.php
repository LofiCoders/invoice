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
            $table->foreignId('user_id')->reference('id')->on('users');
            $table->string('name');
            $table->string('product_code')->nullable();
            $table->string('type');
            $table->integer('price');
            $table->longText('description');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
