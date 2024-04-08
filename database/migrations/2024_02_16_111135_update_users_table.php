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
        Schema::table('users', function (Blueprint $table) {

            $table->text('full_name')->nullable();
            $table->text('role')->nullable();
            $table->unsignedBigINteger('id_team');
            $table->foreign('id_team')->references('id')->on('team');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(columns: 'full_name');
            $table->dropColumn(columns: 'role');
            $table->dropColumn(columns: 'id_team');
    });
        }
};
