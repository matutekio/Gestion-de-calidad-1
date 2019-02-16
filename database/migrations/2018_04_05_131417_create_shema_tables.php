<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShemaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proceso_id')->unsigned();
            $table->string('descripcion')->nullable();
            $table->string('actividad');
            $table->timestamps();
        });
        Schema::create('actividad_destino', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('actividad_entsal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('entsal_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('actividad_proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('actividad_responsable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('responsable_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('destino', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destino');
            $table->integer('organizacion_id')->unsigned();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
        Schema::create('entrada_salida', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tipo')->comment('1=Entrada;2=Salida');
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
        Schema::create('frecuencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('frecuencia');
            $table->integer('num_dias');
            $table->timestamps();
        });
        Schema::create('indicador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indicador');
            $table->string('descripcion')->nullable();
            $table->integer('proceso_id')->unsigned();
            $table->integer('actividad_id')->unsigned();
            $table->integer('frecuencia_id')->unsigned();
            $table->integer('tipoIndicador_id')->unsigned();
            $table->double('meta',10,2);
            $table->string('forma_calculo');
            $table->timestamps();
        });
        Schema::create('proceso_recurso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proceso_id')->unsigned();
            $table->integer('recurso_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('objetivo_calidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objetivo');
            $table->integer('organizacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('organizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ruc');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('politicaCalidad');
            $table->timestamps();
        });
        Schema::create('organizacion_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organizacion_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('proceso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->integer('organizacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proveedor');
            $table->string('descripcion')->nullable();
            $table->integer('organizacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('rango', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('indicador_id')->unsigned();
            $table->double('lim_desde',10,2);
            $table->double('lim_hasta',10,2);
            $table->integer('tipo')->comment('1=Minimo/Inaceptable;2=Normal;3=Maximo/Aceptable');
            $table->timestamps();
        });
        Schema::create('recurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recurso');
            $table->string('descripcion')->nullable();
            $table->integer('organizacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('responsable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->integer('organizacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('descripcion')->nullable();
            $table->integer('organizacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('tipo_indicador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
        Schema::create('user_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('variable', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valor',10,2);
            $table->integer('indicador_id')->unsigned()->nullable();
            $table->integer('entsal_id')->unsigned()->nullable();
            $table->date('fecha');
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
        Schema::dropIfExists('actividad');
        Schema::dropIfExists('actividad_destino');
        Schema::dropIfExists('actividad_entsal');
        Schema::dropIfExists('actividad_proveedor');
        Schema::dropIfExists('actividad_responsable');
        Schema::dropIfExists('destino');
        Schema::dropIfExists('entrada_salida');
        Schema::dropIfExists('frecuencia');
        Schema::dropIfExists('indicador');
        Schema::dropIfExists('objetivo_calidad');
        Schema::dropIfExists('organizacion');
        Schema::dropIfExists('organizacion_users');
        Schema::dropIfExists('proceso');
        Schema::dropIfExists('proceso_recurso');
        Schema::dropIfExists('proveedor');
        Schema::dropIfExists('rango');
        Schema::dropIfExists('recurso');
        Schema::dropIfExists('responsable');
        Schema::dropIfExists('role');
        Schema::dropIfExists('tipo_indicador');
        Schema::dropIfExists('user_role');
        Schema::dropIfExists('variable');
        
    }
}
