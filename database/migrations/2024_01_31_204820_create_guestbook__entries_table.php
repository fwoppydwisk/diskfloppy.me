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
        Schema::create('guestbook__entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->bigInteger('timestamp');
            $table->string('ip_address', 40);
            $table->string('agent', 2048)->default('Agent unavailable');
            $table->boolean('site_owner')->default(0);
            $table->string('message', 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guestbook__entries');
    }
};
