<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>

	{!! Html::style('/assets/EstilosPdf/pdf_formatos.css') !!}

</head>

<body style="font-family: 'Play', sans-serif;">

	<div id="header"> 
		<table width="100%">
			<tbody>
				<tr>
					<td width="30%" style="vertical-align:middle;">
						{!! html::image('images/logo_crep.png', '', ['class'=>'img-head']) !!}
					</td>
					<td width="40%"></td>
					<td width="30%">
						<p align="right" style="font-size: 13px;">
							San Luis Potosí, S.L.P. <br>

						</p>
					</td>
				</tr>
			</tbody>
		</table>
		
	</div>

<!-- Pié de página -->
<div id="footer">
	<p class="page" align="center">
		Pág.
		<center>
			<hr width="100%">
			<p>
				<strong>Centro Regional de Enfermedades Oncológicas, S.A. de C.V.</strong>
				<br>
				Av. Palmira #600-A Colonia Villas del Pedregal, C.P. 78218, San Luis Potosí &nbsp;&nbsp;
				Tels. (444) 151 0900 y 834 0160 &nbsp;&nbsp; http://www.creo.com.mx
			</p>
		</center>
	</p>
</div>

<div id="content">

	@yield( 'body' )

</div>

</body>

</html>