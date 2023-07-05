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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->reference('id')->on('users');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('company');
            $table->string('website');
            $table->foreignId('country_id')->reference('id')->on('countries');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
