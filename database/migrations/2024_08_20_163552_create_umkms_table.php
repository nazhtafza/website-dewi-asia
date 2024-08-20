<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('nomor_umkm')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umkms');
    }
}
