<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if table exists and is empty
        if (Schema::hasTable('bookmark__categories') && DB::table('bookmark__categories')->count() == 0) {
            // Insert placeholder categories
            DB::table('bookmark__categories')->insert([
                ['name' => 'Friends\' Websites', 'priority' => 1],
                ['name' => 'Cool Projects', 'priority' => 2],
                ['name' => 'Other Cool Sites', 'priority' => 3],
                ['name' => 'Miscellaneous Resources', 'priority' => 4]
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
