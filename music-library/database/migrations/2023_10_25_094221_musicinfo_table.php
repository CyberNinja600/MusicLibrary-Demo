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
        Schema::create('musicinfo_table', function (Blueprint $table) {
            $table->id();
            $table->string('song_name');
            $table->string('description');
            $table->string('file_name');
            $table->string('thumbnail_file_name');
            $table->string('uploaded_by');
            $table->dateTime('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicinfo_table');
    }
};
