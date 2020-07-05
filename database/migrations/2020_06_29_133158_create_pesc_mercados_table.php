<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePescMercadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesc_mercados', function (Blueprint $table) {
            $table->id();
            
            $table->integer('nr');
            $table->string('empre');
            $table->date('data');
            
            
            $table->unsignedBigInteger('loc');
            $table->foreign('loc')->references('id')->on('pesc_localidades');
            
            $table->unsignedBigInteger('cat');
            $table->foreign('cat')->references('id')->on('pesc_especies');
            
            
            $table->float('ct', 8, 2);
            $table->float('cp', 8, 2);
            $table->float('pt', 8, 2);
            $table->float('cpc', 8, 2);
            $table->float('cptc', 8, 2);
            $table->float('cppc', 8, 2);
            $table->integer('esto');
            $table->integer('gono');
            $table->float('pgono', 8, 2);
            
            $table->string('cab');
            $table->integer('nr_foto');
            $table->string('ref');
            $table->string('sexo');
            $table->integer('ematur');
            $table->string('histo');
            $table->string('teci');
            $table->string('cresc');
            
            $table->integer('gg');
            $table->integer('gr');
            $table->text('obs');
            $table->float('cf', 8, 2);
            
            
            
            
            $table->integer('do');
            $table->integer('lda');
            $table->integer('lea');
            $table->integer('ldl');
            $table->integer('lel');
            $table->integer('ldp');
            $table->integer('lep');
            $table->integer('ada');
            $table->integer('aea');
            $table->integer('adl');
            $table->integer('ael');
            $table->integer('adp');
            $table->integer('aep');
            $table->integer('sda');
            $table->integer('sea');
            $table->integer('sdl');
            $table->integer('sel');
            $table->integer('sdp');
            $table->integer('sep');
            $table->integer('rt');
            $table->integer('r1');
            $table->integer('r2');
            $table->integer('r3');
            $table->integer('r4');
            $table->integer('r5');
            $table->integer('r6');
            $table->integer('r7');
            $table->integer('r8');
            $table->integer('r9');
            $table->integer('r10');
            $table->integer('r11');
            $table->integer('r12');
            $table->integer('r13');
            $table->integer('r14');
            $table->integer('r15');
            $table->integer('r16');
            $table->integer('r17');
            $table->integer('r18');
            $table->integer('r19');
            $table->integer('r20');
            $table->integer('ida');
            
            $table->integer('ematur_mac');
            $table->string('gen');
            $table->string('od');
            $table->string('ap');
            $table->string('anali');
            $table->string('bor');
            $table->float('im', 8, 2);
            $table->string('go');
            $table->string('est');
            $table->float('pt_corr', 8, 2);
            $table->float('ct_corr', 8, 2);
            $table->float('cf_corr', 8, 2);
            
            
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
        Schema::dropIfExists('pesc_mercados');
    }
}
