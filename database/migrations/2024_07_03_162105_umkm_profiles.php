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
        Schema::create('umkm_profiles', function (Blueprint $table) {
            $table->id('umkm_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('umkm_name', 100);
            $table->text('umkm_description');
            $table->string('umkm_address', 255);
            $table->string('contact_info', 100);
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
