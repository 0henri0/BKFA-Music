<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumSingerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('album_singers');
        Schema::create('album_singers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('avatar');
            $table->integer('view')->default(0);
            $table->integer('singer_id')->unsigned()->nullable();
            $table->foreign('singer_id')->references('id')->on('singers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_singers');
    }
}
