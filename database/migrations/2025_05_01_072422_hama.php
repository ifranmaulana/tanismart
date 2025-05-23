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
        Schema::create('pest', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('decription');
            $table->string('image')->nullable();
            $table->string('source')->nullable();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
