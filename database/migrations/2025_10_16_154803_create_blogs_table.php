<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * varchar(255)
     * likes: integer
     * published_at: timestamp
     * updated_at: timestamp
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('content', 255);
            $table->unsignedInteger('likes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
