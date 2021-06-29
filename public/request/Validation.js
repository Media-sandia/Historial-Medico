$(document).ready(function(){
         disable();
        select();
}); // fin document

function store(){
        var route = 'public/paciente/store';

        $.ajax({
                url: route,
                type: 'POST',
                dataType: 'json',
                data: $('#FormHistorial').serialize(),
                success:function(data){

                        if(data.status == 1){
                                Swal.fire(
                                     'Registro Guardado',
                                     'You clicked the button!',
                                     'success'
                                )
                            ResetForm()
                        }
                },
                error:function(data){
                        ShowValitation(data);
                }

        });
}

function UperA(srt){
        srt.value = srt.value.split(" ").map( e => e[0].toUpperCase() + e.slice(1)).join(" ");
}


function ShowValitation(data){

        toastr.error(
        'Hay algunos errores de validación, corrígelos.',
        'Error de validación',
        {
            timeOut: 4000,
            positionClass: "toast-top-full-width"
        }
        );


    var response = data.responseText;
    var jsonData = JSON.parse(response);

    $( '#error_first_Nombre').remove();
    if( jsonData.errors.Nombre != null )
    {
        $( '#error_tipo_Nombre ').append( "<font color='#BF4949' size='2' id='error_first_Nombre'>" + jsonData.errors.Nombre + "</font>" );
    }

    $( '#error_first_Fecha' ).remove();
    if( jsonData.errors.Fecha != null )
    {
        $( '#error_tipo_Fecha' ).append( "<font color='#BF4949' size='2' id='error_first_Fecha'>" + jsonData.errors.Fecha + "</font>" );
    }

    $( '#error_first_Domicilio' ).remove();
    if( jsonData.errors.Domicilio != null )
    {
        $( '#error_tipo_Domicilio  ' ).append( "<font color='#BF4949' size='2' id='error_first_Domicilio'>" + jsonData.errors.Domicilio + "</font>" );
    }

    $( '#error_first_Ciudad' ).remove();
    if( jsonData.errors.Ciudad != null )
    {
        $( '#error_tipo_Ciudad  ' ).append( "<font color='#BF4949' size='2' id='error_first_Ciudad'>" + jsonData.errors.Ciudad + "</font>" );
    }

    $( '#error_first_Municipio' ).remove();
    if( jsonData.errors.Municipio != null )
    {
        $( '#error_tipo_Municipio  ' ).append( "<font color='#BF4949' size='2' id='error_first_Municipio'>" + jsonData.errors.Municipio + "</font>" );
    }

    $( '#error_first_CP' ).remove();
    if( jsonData.errors.CP != null )
    {
        $( '#error_tipo_CP  ' ).append( "<font color='#BF4949' size='2' id='error_first_CP'>" + jsonData.errors.CP + "</font>" );
    }

    $( '#error_first_Telefono' ).remove();
    if( jsonData.errors.Telefono != null )
    {
        $( '#error_tipo_Telefono  ' ).append( "<font color='#BF4949' size='2' id='error_first_Telefono'>" + jsonData.errors.Telefono + "</font>" );
    }
    //Antecedentes Heredofamiliares
    $( '#error_first_Fcancer' ).remove();
    if( jsonData.errors.Fcancer != null )
    {
        $( '#error_tipo_Fcancer  ' ).append( "<font color='#BF4949' size='2' id='error_first_Fcancer'>" + jsonData.errors.Fcancer + "</font>");
    }

    $( '#error_first_EspecifiqueSI' ).remove();
    if( jsonData.errors.EspecifiqueSI != null )
    {
        $( '#error_EspecifiqueSI ' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueSI'>" + jsonData.errors.EspecifiqueSI + "</font>");
    }

    $( '#error_first_Ncancer' ).remove();
    if( jsonData.errors.Ncancer != null )
    {
        $( '#error_tipo_Ncancer  ' ).append( "<font color='#BF4949' size='2' id='error_first_Ncancer'>" + jsonData.errors.Ncancer + "</font>");
    }

    $( '#error_first_EspecifiqueNO' ).remove();
    if( jsonData.errors.EspecifiqueNO != null )
    {
        $( '#error_EspecifiqueNO  ' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueNO'>" + jsonData.errors.EspecifiqueNO + "</font>");
    }
     //Antecedentes Personales No Patológicos
     $( '#error_first_Alergias' ).remove();
    if( jsonData.errors.Alergias != null )
    {
        $( '#error_tipo_Alergias' ).append( "<font color='#BF4949' size='2' id='error_first_Alergias'>" + jsonData.errors.Alergias + "</font>");
    }

    $( '#error_first_EspecifiqueAlergias' ).remove();
    if( jsonData.errors.EspecifiqueAlergias != null )
    {
        $( '#error_EspecifiqueAlergias' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueAlergias'>" + jsonData.errors.EspecifiqueAlergias + "</font>");
    }

    $( '#error_first_Fuma' ).remove();
    if( jsonData.errors.Fuma != null )
    {
        $( '#error_tipo_Fuma' ).append( "<font color='#BF4949' size='2' id='error_first_Fuma'>" + jsonData.errors.Fuma + "</font>");
    }

    $( '#error_first_EspecifiqueFuma' ).remove();
    if( jsonData.errors.EspecifiqueFuma != null )
    {
        $( '#error_EspecifiqueFuma' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueFuma'>" + jsonData.errors.EspecifiqueFuma + "</font>");
    }

     $( '#error_first_Alchol' ).remove();
    if( jsonData.errors.Alchol != null )
    {
        $( '#error_Alchol' ).append( "<font color='#BF4949' size='2' id='error_first_Alchol'>" + jsonData.errors.Alchol + "</font>");
    }

    $( '#error_first_EspecifiqueAlchol' ).remove();
    if( jsonData.errors.EspecifiqueAlchol != null )
    {
        $( '#error_EspecifiqueAlchol' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueAlchol'>" + jsonData.errors.EspecifiqueAlchol + "</font>");
    }

    $( '#error_first_toxicomanías' ).remove();
    if( jsonData.errors.toxicomanías != null )
    {
        $( '#error_tipo_toxicomanías ' ).append( "<font color='#BF4949' size='2' id='error_first_toxicomanías'>" + jsonData.errors.toxicomanías + "</font>");
    }

    $( '#error_first_Especifiquetoxicomanías' ).remove();
    if( jsonData.errors.Especifiquetoxicomanías != null )
    {
        $( '#error_Especifiquetoxicomanías ' ).append( "<font color='#BF4949' size='2' id='error_first_Especifiquetoxicomanías'>" + jsonData.errors.Especifiquetoxicomanías + "</font>");
    }

    $( '#error_first_EspecifiqueSangre' ).remove();
    if( jsonData.errors.EspecifiqueSangre != null )
    {
        $( '#error_tipo_EspecifiqueSangre ' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueSangre'>" + jsonData.errors.Especifiquetoxicomanías + "</font>");
    }

    $( '#error_first_EspecifiqueRH' ).remove();
    if( jsonData.errors.EspecifiqueRH != null )
    {
        $( '#error_tipo_EspecifiqueRH' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueRH'>" + jsonData.errors.EspecifiqueRH + "</font>");
    }

    $( '#error_first_Operado' ).remove();
    if( jsonData.errors.Operado != null )
    {
        $( '#error_tipo_Operado' ).append( "<font color='#BF4949' size='2' id='error_first_Operado'>" + jsonData.errors.Operado + "</font>");
    }

    $( '#error_first_EspecifiqueOperado' ).remove();
    if( jsonData.errors.EspecifiqueOperado != null )
    {
        $( '#error_EspecifiqueOperado' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueOperado'>" + jsonData.errors.EspecifiqueOperado + "</font>");
    }

    $( '#error_first_Transfucion' ).remove();
    if( jsonData.errors.Transfucion != null )
    {
        $( '#error_tipo_Transfucion' ).append( "<font color='#BF4949' size='2' id='error_first_Transfucion'>" + jsonData.errors.Transfucion + "</font>");
    }

    $( '#error_first_FechaTransfucion' ).remove();
    if( jsonData.errors.FechaTransfucion != null )
    {
        $( '#error_FechaTransfucion' ).append( "<font color='#BF4949' size='2' id='error_first_FechaTransfucion'>" + jsonData.errors.FechaTransfucion + "</font>");
    }

    $( '#error_first_Fracturas' ).remove();
    if( jsonData.errors.Fracturas != null )
    {
        $( '#error_tipo_Fracturas' ).append( "<font color='#BF4949' size='2' id='error_first_Fracturas'>" + jsonData.errors.Fracturas + "</font>");
    }

    $( '#error_first_EspecifiqueFracturas' ).remove();
    if( jsonData.errors.EspecifiqueFracturas != null )
    {
        $( '#error_EspecifiqueFracturas' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueFracturas'>" + jsonData.errors.EspecifiqueFracturas + "</font>");
    }

    $( '#error_first_VHP' ).remove();
    if( jsonData.errors.VHP != null )
    {
        $( '#error_tipo_VHP' ).append( "<font color='#BF4949' size='2' id='error_first_VHP'>" + jsonData.errors.VHP + "</font>");
    }

    $( '#error_first_HepatitisB' ).remove();
    if( jsonData.errors.HepatitisB != null )
    {
        $( '#error_tipo_HepatitisB' ).append( "<font color='#BF4949' size='2' id='error_first_HepatitisB'>" + jsonData.errors.HepatitisB + "</font>");
    }

    $( '#error_first_HepatitisC' ).remove();
    if( jsonData.errors.HepatitisC != null )
    {
        $( '#error_tipo_HepatitisC' ).append( "<font color='#BF4949' size='2' id='error_first_HepatitisC'>" + jsonData.errors.HepatitisC + "</font>");
    }

    $( '#error_first_Escolaridad' ).remove();
    if( jsonData.errors.Escolaridad != null )
    {
        $( '#error_tipo_Escolaridad' ).append( "<font color='#BF4949' size='2' id='error_first_Escolaridad'>" + jsonData.errors.Escolaridad + "</font>");
    }

    $( '#error_first_EstadoCivil' ).remove();
    if( jsonData.errors.EstadoCivil != null )
    {
        $('#error_tipo_EstadoCivil').append( "<font color='#BF4949' size='2' id='error_first_EstadoCivil'>" + jsonData.errors.EstadoCivil + "</font>");
    }

    $( '#error_first_EspecifiqueOcupacion' ).remove();
    if( jsonData.errors.EspecifiqueOcupacion != null )
    {
        $( '#error_tipo_Ocupacion' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueOcupacion'>" + jsonData.errors.EspecifiqueOcupacion + "</font>");
    }

    $( '#error_first_EspecifiqueDeporte' ).remove();
    if( jsonData.errors.EspecifiqueDeporte != null )
    {
        $( '#error_tipo_Deporte' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueDeporte'>" + jsonData.errors.EspecifiqueDeporte + "</font>");
    }
    //Antecedentes Patológicos
    $( '#error_first_DiabetesM' ).remove();
    if( jsonData.errors.DiabetesM != null )
    {
        $( '#error_tipo_DiabetesM' ).append( "<font color='#BF4949' size='2' id='error_first_DiabetesM'>" + jsonData.errors.DiabetesM + "</font>");
    }

    $( '#error_first_EspecifiqueDiabetes' ).remove();
    if( jsonData.errors.EspecifiqueDiabetes != null )
    {
        $( '#error_EspecifiqueDiabetes' ).append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueDiabetes'>" + jsonData.errors.EspecifiqueDiabetes + "</font>");
    }

    $( '#error_first_Impertencion' ).remove();
    if( jsonData.errors.Impertencion != null )
    {
        $('#error_Ipertencion').append( "<font color='#BF4949' size='2' id='error_first_Impertencion'>" + jsonData.errors.Impertencion + "</font>");
    }

    $( '#error_first_EspecifiqueIpertencion' ).remove();
    if( jsonData.errors.EspecifiqueIpertencion != null )
    {
        $('#error_EspecifiqueIpertencion ').append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueIpertencion'>" + jsonData.errors.EspecifiqueIpertencion + "</font>");
    }

    $( '#error_first_Pcancer' ).remove();
    if( jsonData.errors.Pcancer != null )
    {
        $('#error_tipo_Pcancer ').append( "<font color='#BF4949' size='2' id='error_first_Pcancer'>" + jsonData.errors.Pcancer + "</font>");
    }

    $( '#error_first_EspecifiquePcancer' ).remove();
    if( jsonData.errors.EspecifiquePcancer != null )
    {
        $('#error_EspecifiquePcancer ').append( "<font color='#BF4949' size='2' id='error_first_EspecifiquePcancer'>" + jsonData.errors.EspecifiquePcancer + "</font>");
    }

    $( '#error_first_RT' ).remove();
    if( jsonData.errors.RT != null )
    {
        $('#error_tipo_RT ').append( "<font color='#BF4949' size='2' id='error_first_RT'>" + jsonData.errors.RT + "</font>");
    }

    $( '#error_first_EspecifiqueRT' ).remove();
    if( jsonData.errors.EspecifiqueRT != null )
    {
        $('#error_EspecifiqueRT ').append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueRT'>" + jsonData.errors.EspecifiqueRT + "</font>");
    }

    $( '#error_first_PartRT' ).remove();
    if( jsonData.errors.PartRT != null )
    {
        $('#error_PartRT ').append( "<font color='#BF4949' size='2' id='error_first_PartRT'>" + jsonData.errors.PartRT + "</font>");
    }

    $( '#error_first_QM' ).remove();
    if( jsonData.errors.QM != null )
    {
        $('#error_tipo_QM ').append( "<font color='#BF4949' size='2' id='error_first_QM'>" + jsonData.errors.QM + "</font>");
    }

    $( '#error_first_EspecifiqueQM' ).remove();
    if( jsonData.errors.EspecifiqueQM != null )
    {
        $('#error_EspecifiqueQM ').append( "<font color='#BF4949' size='2' id='error_first_EspecifiqueQM'>" + jsonData.errors.EspecifiqueQM + "</font>");
    }

    $( '#error_first_Menstruacion' ).remove();
    if( jsonData.errors.Menstruacion != null )
    {
        $('#error_tipo_Menstruacion ').append( "<font color='#BF4949' size='2' id='error_first_Menstruacion'>" + jsonData.errors.Menstruacion + "</font>");
    }

    $( '#error_first_Embarazos' ).remove();
    if( jsonData.errors.Embarazos != null )
    {
        $('#error_tipo_Embarazos ').append( "<font color='#BF4949' size='2' id='error_first_Embarazos'>" + jsonData.errors.Embarazos + "</font>");
    }

    $( '#error_first_Menstrua' ).remove();
    if( jsonData.errors.Menstrua != null )
    {
        $('#error_tipo_Menstrua ').append( "<font color='#BF4949' size='2' id='error_first_Menstrua'>" + jsonData.errors.Menstrua + "</font>");
    }

    $( '#error_first_MenstruaD' ).remove();
    if( jsonData.errors.MenstruaD != null )
    {
        $('#error_tipo_MenstruaD ').append( "<font color='#BF4949' size='2' id='error_first_MenstruaD'>" + jsonData.errors.MenstruaD + "</font>");
    }

    $( '#error_first_FechaPap' ).remove();
    if( jsonData.errors.FechaPap != null )
    {
        $('#error_tipo_FechaPap ').append( "<font color='#BF4949' size='2' id='error_first_FechaPap'>" + jsonData.errors.FechaPap + "</font>");
    }

    $( '#error_first_Mastografia' ).remove();
    if( jsonData.errors.Mastografia != null )
    {
        $('#error_tipo_Mastografia ').append( "<font color='#BF4949' size='2' id='error_first_Mastografia'>" + jsonData.errors.Mastografia + "</font>");
    }

    $('#error_first_Menopausia' ).remove();
    if( jsonData.errors.Menopausia != null )
    {
        $('#error_tipo_Menopausia ').append( "<font color='#BF4949' size='2' id='error_first_Menopausia'>" + jsonData.errors.Menopausia + "</font>");
    }
} // fin ShowValitation

function ResetForm(){
        $('#FormHistorial')[0].reset();
        $('#Fcancer' ).val('').trigger('change');
        $('#Ncancer' ).val('').trigger('change');
        $('#Alergias' ).val('').trigger('change');
        $('#Fuma' ).val('').trigger('change');
        $('#Alchol' ).val('').trigger('change');
        $('#toxicomanías' ).val('').trigger('change');
        $('#Operado' ).val('').trigger('change');
        $('#Fracturas' ).val('').trigger('change');
        $('#DiabetesM' ).val('').trigger('change');
        $('#Impertencion' ).val('').trigger('change');
        $('#Pcancer' ).val('').trigger('change');
        CleanValidation()
}// fin ResetForm

function CleanValidation(){
         $('#error_first_Nombre').remove();
         $('#error_first_Fecha').remove();
         $('#error_first_Domicilio').remove();
         $('#error_first_Ciudad').remove();
         $('#error_tipo_Municipio').remove();
         $('#error_first_CP').remove();
         $('#error_first_Telefono').remove();
         $('#error_first_Fcancer').remove();
         $('#error_first_EspecifiqueSI').remove();
         $('#error_first_Ncancer').remove();
         $('#error_first_EspecifiqueNO').remove();
         $('#error_first_Alergias').remove();
         $('#error_first_EspecifiqueAlergias').remove();
         $('#error_first_Fuma').remove();
         $('#error_first_EspecifiqueFuma').remove();
         $('#error_first_Alchol').remove();
         $('#error_first_EspecifiqueAlchol').remove();
         $('#error_first_toxicomanías').remove();
         $('#error_first_Especifiquetoxicomanías').remove();
         $('#error_first_EspecifiqueSangre').remove();
         $('#error_first_EspecifiqueRH').remove();
         $('#error_first_Operado').remove();
         $('#error_first_EspecifiqueOperado').remove();
         $('#error_first_Transfucion').remove();
         $('#error_first_FechaTransfucion').remove();
         $('#error_first_Fracturas').remove();
         $('#error_first_EspecifiqueFracturas').remove();
         $('#error_first_VHP').remove();
         $('#error_first_HepatitisB').remove();
         $('#error_first_HepatitisC').remove();
         $('#error_first_Escolaridad').remove();
         $('#error_first_EstadoCivil').remove();
         $('#error_first_EspecifiqueOcupacion').remove();
         $('#error_first_EspecifiqueDeporte').remove();
         $('#error_first_DiabetesM').remove();
         $('#error_first_EspecifiqueDiabetes').remove();
         $('#error_first_Impertencion').remove();
         $('#error_first_EspecifiqueIpertencion').remove();
         $('#error_first_Pcancer').remove();
         $('#error_first_EspecifiquePcancer').remove();
         $('#error_first_RT').remove();
         $('#error_first_EspecifiqueRT').remove();
         $('#error_first_PartRT').remove();
         $('#error_first_QM').remove();
         $('#error_first_EspecifiqueQM').remove();
         $('#error_first_Menstruacion').remove();
         $('#error_first_Embarazos').remove();
         $('#error_first_Menstrua').remove();
         $('#error_first_MenstruaD').remove();
         $('#error_first_FechaPap').remove();
         $('#error_first_Mastografia').remove();
         $('#error_first_Menopausia').remove();
}// fin CleanValidation

function select(){
        $('#Fcancer').change(function(){
                if($(this).val() === "No"){
                   $('#EspecifiqueSI').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueSI').val('');
                }
        });

        $('#Ncancer').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueNO').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueNO').val('');
                }
        });

        $('#Alergias').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueAlergias').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueAlergias').val('');
                }

        });

        $('#Fuma').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueFuma').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueFuma').val('');
                }
        });

        $('#Alchol').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueAlchol').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueAlchol').val('');
                }
        });

        $('#toxicomanías').change(function(){
                if($(this).val() === "No"){
                  $('#Especifiquetoxicomanías').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#Especifiquetoxicomanías').val('');
                }
        });

        $('#Operado').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueOperado').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueOperado').val('');
                }
        });

        $('#Transfucion').change(function(){
                if($(this).val() === "No"){
                  $('#FechaTransfucion').prop('disabled',true);
                }
                else{
                 $('#FechaTransfucion').prop('disabled',false);
                }
        });

        $('#Fracturas').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueFracturas').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueFracturas').val('');
                }
        });

        $('#DiabetesM').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueDiabetes').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiqueDiabetes').val('');
                }
        });

        $('#Impertencion').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueIpertencion').val('No Aplica').addClass('text-danger');
                }
                else{
                $('#EspecifiqueIpertencion').val('');
                }
        });

        $('#Pcancer').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiquePcancer').val('No Aplica').addClass('text-danger');
                }
                else{
                 $('#EspecifiquePcancer').val('');
                }
        });

        $('#RT').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueRT').prop('disabled',true);
                  $('#PartRT').val('No Aplica');
                }
                else{
                 $('#EspecifiquePcancer').val('');
                }
        });

        $('#QM').change(function(){
                if($(this).val() === "No"){
                  $('#EspecifiqueQM').prop('disabled',true);
                }
                else{
                 $('#EspecifiquePcancer').val('');
                }
        });
        /**$('#').change(function(){
                if($(this).val() === "Si"){
                  $('#EspecifiqueAlergias').val('');
                }
                else{
                 $('#EspecifiqueAlergias').val('No Aplica').addClass('text-danger');
                }
        });**/
}// fin select()

function disable(){

        $("#sexoH").click(function(){
            $('#Menstruacion').val('No Aplica').addClass('text-danger');
            $('#Embarazos').val('No Aplica').addClass('text-danger');
            $('#Menstrua').val('No Aplica').addClass('text-danger');
            $('#MenstruaD').val('No Aplica').addClass('text-danger');
            $('#FechaPap').prop('disabled', true);
            $('#Mastografia').prop('disabled', true);
            $('#Menopausia').prop('disabled', true);

        });

        $("#sexoM").click(function(){
            $('#Menstruacion').val('');
            $('#Embarazos').val('');
            $('#Menstrua').val('');
            $('#MenstruaD').val('');
        });
}// fin disable()

function CamposOpcionales(){

}



