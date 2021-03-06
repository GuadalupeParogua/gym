<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiezaDetalleMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieza_detalle_mantenimientos', function (Blueprint $table) {
            $table->id();//id pieza detalle mantenimientos
            $table->unsignedBigInteger('pieza_id');
            $table->unsignedBigInteger('mantenimiento_id');
            $table->unsignedBigInteger('maquinaria_id');
            $table->integer('cantidad');
            $table->float('precio');
            $table->float('total');
            $table->timestamps();
            $table->softDeletes();
            
            /*$table->primary('pieza_id'); 
            $table->primary('mantenimiento_id'); 
            $table->primary('maquinaria_id');  */
            $table->foreign('pieza_id')->on('piezas')->references('id');
            $table->foreign('mantenimiento_id')->on('mantenimientos')->references('id');
            $table->foreign('maquinaria_id')->on('maquinarias')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pieza_detalle_mantenimientos');
    }
}
