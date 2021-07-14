<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistorialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre'=>'required',
            'Fecha'=>'required',
            'Domicilio'=>'required',
            'Ciudad'=>'required',
            'Municipio'=>'required',
            'CP'=>'required',
            'Telefono'=>'required',
            //Antecedentes Heredofamiliares
            'Fcancer'=>'required',
            'EspecifiqueSI'=>'required',
            'Ncancer'=>'required',
            'EspecifiqueNO'=>'required',
            //Antecedentes Personales No Patológicos
            'Alergias'=>'required',
            'EspecifiqueAlergias'=>'required',
            'Fuma'=>'required',
            'EspecifiqueFuma'=>'required',
            'Alchol'=>'required',
            'EspecifiqueAlchol'=>'required',
            'toxicomanías'=>'required',
            'Especifiquetoxicomanías'=>'required',
            'EspecifiqueSangre'=>'required',
            'EspecifiqueRH'=>'required',
            'Operado'=>'required',
            'EspecifiqueOperado'=>'required',
            'Transfucion'=>'required',
            'FechaTransfucion'=>'nullable',
            'Fracturas'=>'required',
            'EspecifiqueFracturas'=>'required',
            'VHP'=>'required',
            'HepatitisB'=>'required|string',
            'HepatitisC'=>'required',
            'Escolaridad'=>'required',
            'EstadoCivil'=>'required',
            'EspecifiqueOcupacion'=>'required',
            'EspecifiqueDeporte'=>'nullable',
            //Antecedentes Patológicos
            'DiabetesM'=>'required',
            'EspecifiqueDiabetes'=>'required',
            'Impertencion'=>'required',
            'EspecifiqueIpertencion'=>'required',
            'Pcancer'=>'required',
            'EspecifiquePcancer'=>'required',
            'Otro'=>'required',
            'EspecifiquePcancer'=>'required',
            'RT'=>'required',
            'EspecifiqueRT'=>'nullable',
            'PartRT'=>'required',
            'QM'=>'required',
            'EspecifiqueQM'=>'nullable',
            'inmunoterapia'=>'required',
            'FechaInmune'=>'nullable',
            //Datos Gineco Obstetrico
            'Menstruacion'=>'required',
            'Embarazos'=>'required',
            'Menstrua'=>'required',
            'MenstruaD'=>'required',
            'FechaPap'=>'nullable',
            'Mastografia'=>'nullable',
            'Menopausia'=>'nullable',
        ];
    }// fin rules

    public function messages(){
    return[
    'Nombre.required'=>'Este Campo Es Obligatorio',
    'Fecha.required'=>'Este Campo Es Obligatorio',
    'Domicilio.required'=>'Este Campo Es Obligatorio',
    'Ciudad.required'=>'Este Campo Es Obligatorio',
    'Municipio.required'=>'Este Campo Es Obligatorio',
    'CP.required'=>'Este Campo Es Obligatorio',
    'Telefono.required'=>'Este Campo Es Obligatorio',
    'Fcancer.required'=>'Este Campo Es Requerido',
    'EspecifiqueSI.required'=>'Este Campo Es Requerido',
    'Ncancer.required'=>'Este Campo Es Requerido',
    'EspecifiqueNO.required'=>'Este Campo Es Requerido',
    'Alergias.required'=>'Este Campo Es Requerido',
    'EspecifiqueAlergias.required'=>'Este Campo Es Requerido',
    'Fuma.required'=>'Este Campo Es Requerido',
    'EspecifiqueFuma.required'=>'Este Campo Es Requerido',
    'Alchol.required'=>'Este Campo Es Requerido',
    'EspecifiqueAlchol.required'=>'Este Campo Es Requerido',
    'toxicomanías.required'=>'Este Campo Es Requerido',
    'Especifiquetoxicomanías.required'=>'Este Campo Es Requerido',
    'EspecifiqueSangre.required'=>'Este Campo Es Requerido',
    'EspecifiqueRH.required'=>'Este Campo Es Requerido',
    'Operado.required'=>'Este Campo Es Requerido',
    'EspecifiqueOperado.required'=>'Este Campo Es Requerido',
    'Transfucion.required'=>'Este Campo Es Requerido',
    //'FechaTransfucion.required'=>'Este Campo Es Requerido',
    'Fracturas.required'=>'Este Campo Es Requerido',
    'EspecifiqueFracturas.required'=>'Este Campo Es Requerido',
    'VHP.required'=>'Este Campo Es Requerido',
    'HepatitisB.required'=>'Este Campo Es Requerido',
    'HepatitisC.required'=>'Este Campo Es Requerido',
    'Escolaridad.required'=>'Este Campo Es Requerido',
    'EstadoCivil.required'=>'Este Campo Es Requerido',
    'EspecifiqueOcupacion.required'=>'Este Campo Es Requerido',
    //'EspecifiqueDeporte.required'=>'Este Campo Es Requerido',
    'DiabetesM.required'=>'Este Campo Es Requerido',
    'EspecifiqueDiabetes.required'=>'Este Campo Es Requerido',
    'Impertencion.required'=>'Este Campo Es Requerido',
    'EspecifiqueIpertencion.required'=>'Este Campo Es Requerido',
    'Pcancer.required'=>'Este Campo Es Requerido',
    'EspecifiquePcancer.required'=>'Este Campo Es Requerido',
    'RT.required'=>'Este Campo Es Requerido',
    //'EspecifiqueRT.required'=>'Este Campo Es Requerido',
    'PartRT.required'=>'Este Campo Es Requerido',
    'QM.required'=>'Este Campo Es Requerido',
    'inmunoterapia.required'=>'Este Campo Es Requerido',
    //'EspecifiqueQM.required' =>'Este Campo Es Requerido',
    'Menstruacion.required'=>'Este Campo Es Requerido',
    'Embarazos.required'=>'Este Campo Es Requerido',
    'Menstrua.required'=>'Este Campo Es Requerido ',
    'MenstruaD.required'=>'Este Campo Es Requerido',
    //'FechaPap.required'=>'Este Campo Es Requerido ',
    //'Mastografia.required'=>'Este Campo Es Requerido',
    //'Menopausia.required'=>'Este Campo Es Requerido',

    ];

    }// fin messeges

}//fin historial
