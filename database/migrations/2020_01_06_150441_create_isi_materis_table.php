<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_materis', function (Blueprint $table) {
            $table->bigIncrements('id_isi');
            $table->integer('id_sub_materi');
            $table->string('header1');
            $table->string('image1')->nullable();
            $table->longText('paragraf1');
            $table->string('header2')->nullable();
            $table->string('image2')->nullable();
            $table->longText('paragraf2')->nullable();
            $table->string('header3')->nullable();
            $table->string('image3')->nullable();
            $table->longText('paragraf3')->nullable();
            $table->string('header4')->nullable();
            $table->string('image4')->nullable();
            $table->longText('paragraf4')->nullable();
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
        Schema::dropIfExists('isi_materis');
    }
}
