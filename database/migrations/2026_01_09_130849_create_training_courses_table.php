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
        Schema::create('training_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courseID')->references('id')->on('courses')->onUpdate('cascade');
            $table->date('start_date')->comment('تاريخ بداية الكورس');
            $table->date('end_date')->comment('تاريخ نهاية الكورس');
            $table->decimal('price', 8, 2)->comment('سعر الكورس');
            $table->text('notes')->nullable()->comment('ملاحظات اضافية')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_courses');
    }
};
