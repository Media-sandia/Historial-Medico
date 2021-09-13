<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 align-self-center">
                    <h4 class="page-title">Historia Clinica</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="car-body m-2">
                    <form method="POST" action="#" accept-charset="UTF-8"  class="form-horizontal" id="FormHistorial">
                        {{csrf_field()}}
                        <fieldset class="fieldset-form">
                            <legend>Datos Generales</legend>
                            <div class="form-row">

                                <div class="col-sm-3">
                                    <span class="label-form">Nombre Del Paciente<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                       <input type="text" class="form-control" autocomplete="off" id="Nombre" onkeyup="UperA(this)" name="Nombre">
                                    </div>
                                    <div id="error_tipo_Nombre"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">Fecha De Nacimiento<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Seleccione Fecha" autocomplete="off" id="Fecha" name="Fecha">
                                        </div>
                                    <div id="error_tipo_Fecha"></div>
                                </div>

                                <div class="col-md-2 col-sm-2 ml-1">
                                    <span class="label-form">Sexo<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="sexoH" name="Tipo_Sexo" value="Hombre">
                                                    <label class="custom-control-label" for="sexoH">Hombre</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="sexoM" name="Tipo_Sexo" value="Mujer">
                                                <label class="custom-control-label" for="sexoM">Mujer</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="error_sexo"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Domicilio<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="Domicilio" onkeyup="UperA(this)" name="Domicilio">
                                    </div>
                                    <div id="error_tipo_Domicilio"></div>
                                </div>


                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Ciudad<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="Ciudad" onkeyup="UperA(this)" name="Ciudad">
                                    </div>
                                    <div id="error_tipo_Ciudad"></div>
                                </div>
                            </div><!--End row-->

                            <br>

                            <div class="form-row">

                                <div class="col-md-3 col-sm-2">
                                    <span class="label-form">Municipio<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="Municipio" onkeyup="UperA(this)" name="Municipio">
                                    </div>
                                    <div id="error_tipo_Municipio"></div>
                                </div>

                                 <div class="col-md-2 col-sm-2">
                                    <span class="label-form">C.P<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="CP" onkeyup="UperA(this)" name="CP">
                                    </div>
                                    <div id="error_tipo_CP"></div>
                                </div>

                                <div class="col-md-3 col-sm-2">
                                    <span class="label-form">Telefono<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="Telefono" onkeyup="UperA(this)" name="Telefono">
                                    </div>
                                    <div id="error_tipo_Telefono"></div>
                                </div>

                            </div>
                        </fieldset> <!--End fieldset-->
                        <fieldset class="fieldset-form">
                            <legend>Antecedentes Heredofamiliares</legend>
                            <div class="form-row">

                               <div class="col-md-3 col-sm-3">
                                    <span class="label-form">¿Tiene o Ha Tenido Familiares Con Cancer?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Fcancer" id="Fcancer" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Fcancer"></div>
                                </div>

                                <div class="col-md-3">
                                        <span class="label-form">Especifique<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueSI" name="EspecifiqueSI">
                                        </div>
                                        <div id="error_EspecifiqueSI"></div>
                                </div>

                                <div class="col-md-3">
                                    <span class="label-form">¿Tiene Familiares Con Alguna Otra Enfermedad?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Ncancer" id="Ncancer" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Ncancer"></div>
                                </div>

                                <div class="col-md-3">
                                        <span class="label-form">Especifique<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueNO" name="EspecifiqueNO">
                                        </div>
                                        <div id="error_EspecifiqueNO"></div>
                                </div>
                                </div><!--End row-->
                            </fieldset>
                            <fieldset class="fieldset-form">
                                <legend>Antecedentes Personales No Patológicos</legend>
                            <div class="form-row">

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Tiene Alguna Alergia?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Alergias" id="Alergias" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Alergias"></div>
                                </div>

                                <div class="col-md-2 col-sm-1">
                                        <span class="label-form">Especifique<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueAlergias" name="EspecifiqueAlergias">
                                        </div>
                                        <div id="error_EspecifiqueAlergias"></div>
                                </div>

                                <div class="col-md-2 col-sm-1">
                                    <span class="label-form">¿Fuma?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Fuma" id="Fuma" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Fuma"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">Especifique Tiempo y Cantidad<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueFuma" name="EspecifiqueFuma">
                                        </div>
                                        <div id="error_EspecifiqueFuma"></div>
                                </div>

                                <div class="col-md-2 col-sm-1">
                                    <span class="label-form">¿Toma Alcohol?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Alchol" id="Alchol" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_Alchol"></div>
                                </div>
                            </div>

                            <br>

                            <div class="form-row">

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">Especifique Tiempo y Cantidad <span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueAlchol" name="EspecifiqueAlchol">
                                        </div>
                                        <div id="error_EspecifiqueAlchol"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">¿Tiene Alguna Adiccion?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <select name="toxicomanías" id="toxicomanías" class="form-control select2">
                                            <option selected="selected" value="">- Selecciona -</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div id="error_tipo_toxicomanías"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">¿De Que y Cuando? <span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="Especifiquetoxicomanías" name="Especifiquetoxicomanías">
                                        </div>
                                        <div id="error_Especifiquetoxicomanías"></div>
                                </div>

                                <!--<div class="col-md-2">
                                    <span class="label-form">¿Toma?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Alergias" id="Alergias" class="select2 form-control">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Alergias"></div>
                                </div>

                                <div class="col-md-2">
                                        <span class="label-form">Especifique Tiempo y Cantidad <span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="#" id="EspecifiqueAlergias" name="EspecifiqueAlergias">
                                        </div>
                                        <div id="error_EspecifiqueAlergias"></div>
                                </div>-->

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Especifique Grupo De Sangre<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="EspecifiqueSangre" id="EspecifiqueSangre" class="form-control select2">
                                            <option selected="selected" value=" ">- Selecciona -</option>
                                            <option value="Desconoce">Desconoce</option>
                                            <option value="O">O</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_EspecifiqueSangre"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Especifique RH de Sangre<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="EspecifiqueRH" id="EspecifiqueRH" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Desconoce">Desconoce</option>
                                        <option value="+">+</option>
                                        <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_EspecifiqueRH"></div>
                                </div>
                        </div><!--form-row-->

                        <br>

                         <div class="form-row">

                                 <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Lo Han Operado?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Operado" id="Operado" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Operado"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">¿De Que? <span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueOperado" name="EspecifiqueOperado">
                                        </div>
                                        <div id="error_EspecifiqueOperado"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Le Han Puesto Sangre?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Transfucion" id="Transfucion" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Transfucion"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">Fecha De La Ultima Transfusion <span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Selecione Fecha" autocomplete="off" onkeyup="UperA(this)" id="FechaTransfucion" name="FechaTransfucion">
                                        </div>
                                        <div id="error_FechaTransfucion"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Ha Tenido Fracturas?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Fracturas" id="Fracturas" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Fracturas"></div>
                                </div>
                            </div><!--End row-->

                         <br>

                         <div class="form-row">

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">En Donde<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueFracturas" name="EspecifiqueFracturas">
                                        </div>
                                        <div id="error_EspecifiqueFracturas"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Escolaridad<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Escolaridad" id="Escolaridad" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Desconoce">Desconoce</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Bachillerato">Bachillerato</option>
                                        <option value="Licenciatura">Licenciatura</option>
                                        <option value="Maestria">Maestria</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Escolaridad"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Estado Civil<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="EstadoCivil" id="EstadoCivil" class="form-control select2">
                                        <option selected="selected" value=" ">- Selecciona -</option>
                                        <option value="Soltero(a)">Soltero(a)</option>
                                        <option value="Union Libre">Union Libre</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorciado(a)">Divorciado(a)</option>
                                        <option value="Viudo(a)">Viudo(a)</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_EstadoCivil"></div>
                                </div>

                                 <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Ocupacion<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueOcupacion" name="EspecifiqueOcupacion">
                                    </div>
                                    <div id="error_tipo_Ocupacion"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">Deporte<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueDeporte" name="EspecifiqueDeporte">
                                    </div>
                                    <div id="error_tipo_Deporte"></div>
                                </div>
                         </div><!--End row-->
                        </fieldset><!--End fieldset-->
                        <fieldset class="fieldset-form">
                            <legend>Antecedentes Patológicos</legend>

                            <div class="form-row">

                                <div class="col-md-2">
                                    <span class="label-form">¿Padece de Diabetes Mellitus?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="DiabetesM" id="DiabetesM" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_DiabetesM"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">¿Desde Cuando y que Medicamentos Toma?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueDiabetes" name="EspecifiqueDiabetes">
                                        </div>
                                        <div id="error_EspecifiqueDiabetes"></div>
                                </div>

                                <div class="col-md-3 col-sm-2">
                                    <span class="label-form">¿Padece De Hipertencion Arterial?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Impertencion" id="Impertencion" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_Ipertencion"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">¿Desde Cuando y que Medicamentos Toma?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="EspecifiqueIpertencion" name="EspecifiqueIpertencion">
                                        </div>
                                        <div id="error_EspecifiqueIpertencion"></div>
                                </div>
                            </div><!--End row-->
                                <br>
                            <div class="form-row">

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Ha Tenido Otro Tipo De Cancer?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="Otro" id="Otro" class="form-control select2">
                                        <option selected="selected" value=" ">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_Otro"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                        <span class="label-form">¿Cuando Y En Donde?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="OtroEspecifique" name="OtroEspecifique">
                                        </div>
                                        <div id="error_OtroEspecifique"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Recibio Radioterapia?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="RT" id="RT" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_RT"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">¿En Que Tiempo?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" id="EspecifiqueRT" name="EspecifiqueRT">
                                        </div>
                                        <div id="error_EspecifiqueRT"></div>
                                </div>


                            </div><!--End row-->

                            <br>

                            <div class="form-row">

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">¿En Que Parte?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <select name="PartRT" id="PartRT" class="form-control select2">
                                                <option selected="selected" value="">- Selecciona -</option>
                                                 <option value="No Aplica">No Aplica</option>
                                                <option value="Cabeza">Cabeza</option>
                                                <option value="Cuello">Cuello</option>
                                                <option value="Torax">Torax</option>
                                                <option value="Abdomen">Abdomen</option>
                                                <option value="Pelvis">Pelvis</option>
                                                <option value="Extremidades">Extremidades</option>
                                            </select>
                                        </div>
                                        <div id="error_PartRT"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Recibio Quimioterapia?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="QM" id="QM" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_QM"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">¿En Que Tiempo?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" id="EspecifiqueQM" name="EspecifiqueQM" placeholder="">
                                        </div>
                                        <div id="error_EspecifiqueQM"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Recibio inmunoterapia?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="inmunoterapia" id="inmunoterapia" class="form-control select2">
                                        <option selected="selected" value=" ">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_inmunoterapia"></div>
                                </div>
                            </div><!--End row-->
                                <br>
                            <div class="form-row">

                                <div class="col-md-2 col-sm-2">
                                        <span class="label-form">¿Fecha Aproximada?<span class="text-danger">*</span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" id="FechaInmune" name="FechaInmune">
                                        </div>
                                        <div id="error_FechaInmune"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Ha Tenido Infecciones por VHP?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="VHP" id="VHP" class="form-control select2">
                                        <option selected="selected" value=" ">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_VHP"></div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <span class="label-form">¿Ha Tenido Infecciones Hepatitis B?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select id="HepatitisB" name="HepatitisB" class="form-control select2">
                                        <option selected="selected">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_HepatitisB"></div>
                                </div>

                                <div class="col-md-2 col-sm-3">
                                    <span class="label-form">¿Ha Tenido Infecciones Hepatitis C?<span class="text-danger">*</span></span>
                                    <div class="input-group">
                                        <select name="HepatitisC" id="HepatitisC" class="form-control select2">
                                        <option selected="selected" value="">- Selecciona -</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="error_tipo_HepatitisC"></div>
                                </div>
                            </div><!--End row-->
                            </fieldset>

                        <fieldset class="fieldset-form">
                            <legend>Datos Gineco Obstetrico</legend>
                                <div class="form-row">

                            <div class="col-md-3 col-sm-3">
                                    <span class="label-form">¿Edad De La Primera Menstruacion?<span class="text-danger">*</span></span></span>
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="Menstruacion" name="Menstruacion">
                                        </div>
                                        <div id="error_tipo_Menstruacion"></div>

                            </div>

                            <div class="col-md-3 col-sm-3">
                                    <span class="label-form">¿Numero De Embarazos Que Ha Tenido?</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="Embarazos" name="Embarazos">
                                    </div>
                                    <div id="error_tipo_Embarazos"></div>
                            </div>


                                <div class="col-md-2 col-sm-3">
                                    <span class="label-form">¿Cada Cuando Menstrua?</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="Menstrua" name="Menstrua">
                                    </div>
                                    <div id="error_tipo_Menstrua"></div>
                            </div>

                                <div class="col-md-3 col-sm-3">
                                    <span class="label-form">¿Cuanto Dura La Menstruacion?</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" onkeyup="UperA(this)" id="MenstruaD" name="MenstruaD">
                                    </div>
                                    <div id="error_tipo_MenstruaD"></div>
                                </div>
                             </div><!--End row-->

                             <br>

                             <div class="form-row">

                                <div class="col-md-3 col-sm-3">
                                    <span class="label-form">Fecha Del Ultimo Papanicolaou</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="FechaPap" name="FechaPap" placeholder="Seleccione Fecha">
                                    </div>
                                    <div id="error_tipo_FechaPap"></div>
                                </div>

                                <div class="col-md-2 col-sm-3">
                                    <span class="label-form">Fecha Del Ultima Mastografia</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="Mastografia" name="Mastografia" placeholder="Selecione Fecha">
                                    </div>
                                    <div id="error_tipo_Mastografia"></div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <span class="label-form">¿Edad En La Que Entro a La Menopausia?</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" id="Menopausia" onkeyup="UperA(this)" name="Menopausia">
                                    </div>
                                    <div id="error_tipo_Menopausia"></div>
                                </div>
                            </div><!--End Row-->
                        </fieldset>
                    </form><!--End Form-->

                    <div align="right">
                        <button onclick="store()" class="btn btn-outline-success btn-rounded mb-2 mr-3">Guardar</button>
                    </div>
                </div>

            </div><!--End Card-->
        </div><!--End Container-->

    </div><!--End  Page-Wrapper-->
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="request/Validation.js"></script>
