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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('Q1', 500);
            $table->string('Q2', 500);
            $table->string('Q3', 500);
            $table->string('Q4', 500);
            $table->string('Q5', 500);
            $table->string('Q6', 500);
            $table->string('email'); 
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
           
         

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
