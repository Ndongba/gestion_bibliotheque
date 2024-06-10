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
        Schema::table('livres', function (Blueprint $table) {
            $table->unsignedBigInteger('rayon_id');
            
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('livres', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['rayon_id']);
        });
    }
};
