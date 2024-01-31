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
        Schema::create('bookmark__sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('description', 150);
            $table->string('url', 100);
            $table->float('priority');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('bookmark__categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmark__sites');
    }
};
