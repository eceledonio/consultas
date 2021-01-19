<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (! Schema::hasTable('divisas')) {
            Schema::create('divisas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('codigo_divisa');
                $table->string('codigo_iso')->nullable();
                $table->string('descripcion');
                $table->string('simbolo');
                $table->decimal('tasa_conversion', 15, 2)->default(0)->nullable();
                $table->boolean('predeterminado')->default(false);
                $table->boolean('activo')->default(true);
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('divisas');
    }
}
