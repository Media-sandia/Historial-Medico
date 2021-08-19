<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		@page { margin: 155px 50px 97px }


.img-head
{
	  margin-top: 0px;
	  margin-bottom: 0px;
}

#header{
    position:fixed;
    left: 0px;
    top: -135px; /* Cada que queramos poner una imagen mas grande, aumentaremos aqui el negativo y el top en el style @page */
    right: 0px;
    height: 150px;
}

#content{
  	margin-bottom: 10px auto;
}

#footer {
    position: fixed;
    left: 0px;
    bottom: -115px;
    right: 0px;
    height: 130px;
    float: center;
    font-size: 11px;
    color: #0E3A8A;
}

#footer .page:after {
    content: counter(page, decimal);
}

/* Leyenda consentimiento */
.leyenda_cons
{
	  font-size: 12px;
}

/*  TERMINA ESTILO DE LA PAGINA  HEADER CUERPO Y FOOTER*/

.datos_paciente{
	  font-size: 12px;
}

.parrafo_texto{
	  font-size: 10px;
	  text-align: justify;
}

.parrafo_texto_doce{
    font-size: 12px;
    text-align: justify;
}

.tabla-datos_paciente th {
    background-color: #D2DEE2;
    font-size: 13px;
    border-radius: 0px;
}

.tabla-datos_paciente td {
    padding: 4px;
    border: 1px solid #F5F5F5;
    font-size: 10px;
    border-radius: 3px;
}

.bg-element-tabla-datos{
	background-color: #F5F5F5;
}

/* Tabla de asistencia de Radio terapia */
.tabla-asistencia-RT th {
    background-color: #F5F5F5;
    font-size: 8px;
    border-radius: 0px;
}

.tabla-asistencia-RT td {
    padding: 4px;
    border: 1px solid #F5F5F5;
    font-size: 7px;
    border-radius: 3px;
}
/* */



/* Tabla de programaciones */
.tabla-programacion-RT th {
    background-color: #F5F5F5;
    font-size: 9px;
    border-radius: 0px;
}

.tabla-programacion-RT td {
    padding: 4px;
    border: 1px solid #F5F5F5;
    font-size: 9px;
    border-radius: 3px;
}
/* */



/* Firma al final de la hoja */
.firma{
  position: absolute;
  bottom: 0px;
  margin-bottom: 20px;
}
/* Firma */


/* Estili de tema y cuerpo */
.categoria{
    font-size: 12.5px;
    color: #797979;
    background-color: #F8F8F8;
    padding: 4px;
    border-bottom: 1px solid #DEDEDE;
    padding-bottom: 2px;
}

.body-categoria{
    font-size: 12px;
    margin-top:10px;
    margin-bottom: 10px;
    text-align: justify;
}				}
	</style>
</head>
<body>
<h1>Hola Mundo</h1>
</body>
</html>