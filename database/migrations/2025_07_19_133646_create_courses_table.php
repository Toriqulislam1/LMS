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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('sub_title',100)->nullable();
            $table->string('short_description',200)->nullable();
            $table->text('description',5000)->nullable();
            $table->string('start_date',100)->nullable();
            $table->string('end_date',100)->nullable();
            $table->string('duration_month',50)->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('discount',10,2)->default(0);
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
