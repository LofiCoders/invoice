<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturePlansTable extends Migration
{
    public function up(): void
    {
        Schema::create('feature_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->references('id')->on('plans');
            $table->foreignId('feature_id')->references('id')->on('features');
            $table->integer('quota');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
