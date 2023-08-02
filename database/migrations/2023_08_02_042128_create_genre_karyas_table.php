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
        Schema::create('genre_karyas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karya_id');
            $table->foreign('karya_id')
                ->references('id')->on('karyas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('genre')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_karyas');
    }
};
