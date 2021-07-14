<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialRequest;
use App\Models\Paciente;

class FormController extends Controller
{   public function __construct(){
        $this->middleware('auth');
    }

    public function NewRegister(){
        return view('HC.Historial');
    }

    public function Paciente(){
        return view('HC.paciente');
    }

    public function store(HistorialRequest $request){
       $NewHistorial = new Paciente();
        $NewHistorial->Nombre = $request->Nombre;
        $NewHistorial->Fecha_Nacimiento = $request->Fecha;
        $NewHistorial->Sexo = $request->Tipo_Sexo;
        $NewHistorial->Domicilio = $request->Domicilio;
        $NewHistorial->Ciudad = $request->Ciudad;
        $NewHistorial->Municipio = $request->Municipio;
        $NewHistorial->CP = $request->CP;
        $NewHistorial->Telefono = $request->Telefono;
        //Antecedentes Heredofamiliares
        $NewHistorial->Familiares_Cancer = $request->Fcancer;
        $NewHistorial->Especifique_Familiares = $request->EspecifiqueSI;
        $NewHistorial->Familiares_otra = $request->Ncancer;
        $NewHistorial->Especifique_Otra = $request->EspecifiqueNO;
        //Antecedentes Personales No Patológicos
        $NewHistorial->Alergia = $request->Alergias;
        $NewHistorial->Especifique_Alergia = $request->EspecifiqueAlergias;
        $NewHistorial->Fuma = $request->Fuma;
        $NewHistorial->Especifique_Fuma = $request->EspecifiqueFuma;
        $NewHistorial->Toma = $request->Alchol;
        $NewHistorial->Especifique_Toma = $request->EspecifiqueAlchol;
        $NewHistorial->Toxicomanías = $request->toxicomanías;
        $NewHistorial->Especifique_Toxicomanías = $request->Especifiquetoxicomanías;
        $NewHistorial->Grupo_Sangre = $request->EspecifiqueSangre;
        $NewHistorial->RH_Sangre = $request->EspecifiqueRH;
        $NewHistorial->Operado = $request->Operado;
        $NewHistorial->Especifique_Operado = $request->EspecifiqueOperado;
        $NewHistorial->Transfucion = $request->Transfucion;
        $NewHistorial->Fecha_Transfucion = $request->FechaTransfucion;
        $NewHistorial->Fracturas = $request->Fracturas;
        $NewHistorial->Especifique_Fracturas = $request->EspecifiqueFracturas;
        $NewHistorial->Infeccion_VHP = $request->VHP;
        $NewHistorial->Infeccion_EpatitisB = $request->HepatitisB;
        $NewHistorial->Infeccion_EpatitisC = $request->HepatitisC;
        $NewHistorial->Escolaridad = $request->Escolaridad;
        $NewHistorial->Estado_Civil = $request->EstadoCivil;
        $NewHistorial->Ocupacion = $request->EspecifiqueOcupacion;
        $NewHistorial->Deporte = $request->EspecifiqueDeporte;
        //Antecedentes Patológicos
        $NewHistorial->DiabetesM = $request->DiabetesM;
        $NewHistorial->Medicamentos_DiabetesM = $request->EspecifiqueDiabetes;
        $NewHistorial->Impertencion = $request->Impertencion;
        $NewHistorial->Medicamentos_Impertencion = $request->EspecifiqueIpertencion;
        $NewHistorial->Cancer = $request->Pcancer;
        $NewHistorial->Especifique_Cancer = $request->EspecifiquePcancer;
        $NewHistorial->Otro_Cancer = $request->Otro;
        $NewHistorial->Especifique_Cancer_otro = $request->OtroEspecifique;
        $NewHistorial->RT = $request->RT;
        $NewHistorial->Fecha_RT = $request->EspecifiqueRT;
        $NewHistorial->Parte_RT = $request->PartRT;
        $NewHistorial->QM = $request->QM;
        $NewHistorial->Fecha_QM = $request->EspecifiqueQM;
        $NewHistorial->Inmunoterapia = $request->inmunoterapia;
        $NewHistorial->Fecha_Inmunoterapia = $request->FechaInmune;
        //Datos Gineco Obstetrico
        $NewHistorial->Edad_Menstruacion = $request->Menstruacion;
        $NewHistorial->Numero_Embarazos = $request->Embarazos;
        $NewHistorial->Menstrua = $request->Menstrua;
        $NewHistorial->Dura_Menstruacion = $request->MenstruaD;
        $NewHistorial->Fecha_Papanicolado = $request->FechaPap;
        $NewHistorial->Fecha_Mastografia = $request->Mastografia;
        $NewHistorial->Fecha_Menopausia = $request->Menopausia;
        $NewHistorial->save();
        return response()->json(['status'=>1]);

    }//store()
}
