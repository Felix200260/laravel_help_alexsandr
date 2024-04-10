<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {  // Изменено на 'teams'
            $table->id();
            $table->text('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');  // Изменено на 'teams'
    }
};
