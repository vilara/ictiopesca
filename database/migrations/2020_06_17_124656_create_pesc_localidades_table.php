<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePescLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pesc_municipios', function (Blueprint $table) {
            $table->id();
            $table->string('municipio');
            $table->string('estado');
            $table->timestamps();
        });
        
        
        Schema::create('pesc_localidades', function (Blueprint $table) {
            $table->id();
            $table->string('localidade');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('pesc_municipios')->onDelete('cascade');
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
        Schema::dropIfExists('pesc_municipios');
        Schema::dropIfExists('pesc_localidades');
    }
}
