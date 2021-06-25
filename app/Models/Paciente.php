<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable =[
         'Nombre',
         'Fecha',
         'Domicilio',
         'Ciudad',
         'Municipio',
         'CP'=>'required',
         'Telefono',
         'Fcancer',
         'EspecifiqueSI',
         'Ncancer',
         'EspecifiqueNO',
         'Alergias',
         'EspecifiqueAlergias',
         'Fuma',
         'EspecifiqueFuma',
         'Alchol',
         'EspecifiqueAlchol',
         'toxicomanías',
         'Especifiquetoxicomanías',
         'EspecifiqueSangre',
         'EspecifiqueRH',
         'Operado',
         'EspecifiqueOperado',
         'Transfucion',
         'FechaTransfucion',
         'Fracturas',
         'EspecifiqueFracturas',
         'VHP',
         'HepatitisB',
         'HepatitisC',
         'Escolaridad',
         'EstadoCivil',
         'EspecifiqueOcupacion',
         'EspecifiqueDeporte',
         //Antecedentes Patológicos
         'DiabetesM',
         'EspecifiqueDiabetes',
         'Impertencion',
         'EspecifiqueIpertencion',
         'Pcancer',
         'EspecifiquePcancer',
         'RT',
         'EspecifiqueRT',
         'PartRT',
         'QM',
         'EspecifiqueQM',
         //Datos Gineco Obstetrico
         'Menstruacion',
         'Embarazos',
         'Menstrua',
         'MenstruaD',
         'FechaPap',
         'Mastografia',
         'Menopausia',
     ];
}
