<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('paciente_id');
            $table->text('motivo_consulta')->nullable();
            $table->decimal('pa', 15, 2)->nullable();
            $table->decimal('temperatura', 15, 2)->nullable();
            $table->decimal('frecuencia_cardiaca', 15, 2)->nullable();
            $table->decimal('frecuencia_respiratoria', 15, 2)->nullable();
            $table->decimal('saturacion_oxigeno', 15, 2)->nullable();
            $table->decimal('talla', 15, 2)->nullable();
            $table->decimal('peso', 15, 2)->nullable();
            $table->text('signos_sintomas')->nullable();
            $table->text('diagnostico');
            $table->text('tratamiento')->nullable();
            $table->text('plan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
