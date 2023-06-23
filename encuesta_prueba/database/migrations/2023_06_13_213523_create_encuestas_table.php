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
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_institucion',100)->nullable();
            $table->string('actividad_realizada',100)->nullable();
            $table->string('docente_tutor',100)->nullable();
            $table->string('tutor_entidad_financiera',100)->nullable();
            $table->string('proyecto',100)->nullable();
            $table->string('codigo_proyecto',100)->nullable();
            $table->string('genero',100)->nullable();
            $table->string('rango_edad',100)->nullable();
            $table->date('fecha', $precision = 0);
            $table->string('objetivo',255)->nullable();
            $table->string('instructivo',150)->nullable();
            $table->string('informacion_general',150)->nullable();
            $table->string('tipo',150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuestas');
    }
};
