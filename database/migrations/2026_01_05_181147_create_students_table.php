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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 225);
            $table->string('phone', 100)->unique();
            $table->string('address', 225);
            $table->string('image', 255);
            $table->string('email', 150)->unique();
            $table->string('nationalID', 30)->unique();
            $table->string('notes', 255);
            $table->foreignId('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->tinyInteger('active')->default(1)->comment('هو حالة الطالب 1 مفعل 0 غير مفعل');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
