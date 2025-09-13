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
        Schema::table('coustomers', function (Blueprint $table) {
            
          $table->integer('age')->after('name')->comment('العمر');  

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coustomers', function (Blueprint $table) {
            //
        });
    }
};
