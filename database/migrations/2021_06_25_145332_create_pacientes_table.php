<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id()->unique();;
            $table->string('Nombre');
            $table->string('Fecha_Nacimiento');
            $table->string('Sexo');
            $table->string('Domicilio');
            $table->string('Ciudad');
            $table->string('Municipio');
            $table->string('CP');
            $table->string('Telefono');
            $table->string('Familiares_Cancer');
            $table->string('Especifique_Familiares');
            $table->string('Familiares_otra');
            $table->string('Especifique_Otra');
            //antedecentes personales no patologicos
            $table->string('Alergia');
            $table->string('Especifique_Alergia');
            $table->string('Fuma');
            $table->string('Especifique_Fuma');
            $table->string('Toma');
            $table->string('Especifique_Toma');
            $table->string('Toxicomanías');
            $table->string('Especifique_Toxicomanías');
            $table->string('Grupo_Sangre');
            $table->string('RH_Sangre');
            $table->string('Operado');
            $table->string('Especifique_Operado');
            $table->string('Transfucion');
            $table->string('Fecha_Transfucion')->nullable($value = true);
            $table->string('Fracturas');
            $table->string('Especifique_Fracturas');
            $table->string('Infeccion_VHP');
            $table->string('Infeccion_EpatitisB');
            $table->string('Infeccion_EpatitisC');
            $table->string('Escolaridad');
            $table->string('Estado_Civil');
            $table->string('Ocupacion');
            $table->string('Deporte')->nullable($value = true);
            //Antecedentes Patológicos
            $table->string('DiabetesM');
            $table->string('Medicamentos_DiabetesM');
            $table->string('Impertencion');
            $table->string('Medicamentos_Impertencion');
            $table->string('Cancer');
            $table->string('Especifique_Cancer');
            $table->string('RT');
            $table->string('Fecha_RT')->nullable($value = true);
            $table->string('Parte_RT');
            $table->string('QM');
            $table->string('Fecha_QM')->nullable($value = true);
            //Datos Gineco Obstetrico
            $table->string('Edad_Menstruacion');
            $table->string('Numero_Embarazos');
            $table->string('Menstrua');
            $table->string('Dura_Menstruacion');
            $table->string('Fecha_Papanicolado')->nullable($value = true);
            $table->string('Fecha_Mastografia')->nullable($value = true);
            $table->string('Fecha_Menopausia')->nullable($value = true);
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
        Schema::dropIfExists('pacientes');
    }
}
