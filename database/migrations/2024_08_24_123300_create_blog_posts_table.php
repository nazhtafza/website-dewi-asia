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
    Schema::create('blog_posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->string('slug')->unique();
        $table->string('author')->nullable();
        $table->string('banner_image')->nullable();  // For the banner image
        $table->string('content_image')->nullable(); // For the content image
        $table->timestamp('published_at')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};