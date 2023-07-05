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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->integer('price')->unique();
            $table->string('stripe_plan_id')->unique();
            $table->string('payment_period');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
