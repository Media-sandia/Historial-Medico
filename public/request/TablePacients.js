$(document).ready(function(){
    load_data()
    
});

function load_data(){
    $.ajax({
        url:'consultar/patients',
        type:'GET',
        dataType:'json',
        success:function(data){
            show_patients(data.data);
        },
        error:function(data){
            console.log(data.data);
        },
    });//fin ajax 
}

function show_patients(response){
    var table_patients = $('#DataPaciente').DataTable({
        "processing":true,
        "scroller":true,
        "pageLength":20,
        "data":response,
        "columns":[
            {data:'id'},
            {data:'Nombre'},
            {data:'Domicilio'},
            {data:'Ciudad'},
            {data:'CP'},
            {data:'Telefono'},
            {
                data:null,
                orderable:false,
                render:function(data, type,row)
                {
                    return "<button class='btn btn-danger btn-rounded btn-sm' onclick='patients("+data.id+");' ><i class='far fa-file-pdf'></i> Descargar Informe</button> ";
                }
            }
        ]
    })//fin de datatables
} 

function Historial(){
    $.ajax({
        url:'consultar/patients/informe',
        type:'GET',
        dataType:'json',
        success:function(data){
            console.log('Extito');
        },
    })
}

function patients(id){
    var url = 'consultar/patients/'+id;
    return window.open(url,'Informe Medico');
}