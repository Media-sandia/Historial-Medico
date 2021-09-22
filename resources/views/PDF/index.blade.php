@extends('PDF.master')

@section('body')
<br>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<th width="100%" class="bg-element-tabla-datos">
				<strong>Datos Generales</strong>
			</th>
		</tr>
	</tbody>
</table>
<table class="tabla-datos_paciente" width="100%">
	<tbody >
		<tr>
			<td width="20%">
					<strong>Nombre del Paciente</strong>
			</td>
			<td width="25%"  class="bg-element-tabla-datos">
				{{$patients->Nombre}}
			</td>

			<td width="30%">
					<strong>Fecha De Nacimiento</strong>
			</td>

			<td width="25%"  class="bg-element-tabla-datos">
				{{$patients->Fecha_Nacimiento}}
			</td>
		</tr>
	</tbody>
</table>
<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="20%">
					<strong>Domicilio</strong>
			</td>
			<td width="80%" class="bg-element-tabla-datos">
				{{$patients->Domicilio}}
			</td>
		</tr>
	</tbody>
</table>
<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="15%">
					<strong>CP</strong>
			</td>
			<td width="10%" class="bg-element-tabla-datos">
				{{$patients->CP}}
			</td>
			<td width="15%">
					<strong>Ciudad</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->Ciudad}}
			</td>
			<td width="20%">
					<strong>Municipio</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->Municipio}}
			</td>
		</tr>
		<tr>
			<td width="15%">
					<strong>Telefono</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->Telefono}}
			</td>
			<td width="15%">
					<strong>Fecha</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->created_at->toDateString()}}
			</td>
			<td width="20%">
					<strong>Hora de atencion</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->created_at->format("H:i:s A")}}
			</td>
		</tr>
	</tbody>
</table>
<br>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<th width="100%" class="bg-element-tabla-datos">
				<strong>Antecedentes Heredofamiliares</strong>
			</th>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="25%">
				<strong>¿Ha Tenido Familiares con cáncer?</strong>
			</td>
			<td width="75%" class="bg-element-tabla-datos" >
				{{$patients->Especifique_Familiares}}
			</td>
		</tr>

		<tr>
			<td width="25%">
				<strong>¿Tiene Familiares Con Alguna Otra Enfermedad?</strong>
			</td>
			<td width="75%" class="bg-element-tabla-datos">
				{{$patients->Especifique_Otra}}
			</td>
		</tr>
	</tbody>
</table>
<br>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<th width="100%" class="bg-element-tabla-datos">
				<strong>Antecedentes Personales No Patológicos</strong>
			</th>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="20%">
				<strong>Alergias:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Alergia}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Especifique_Alergia}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Alcoholismo:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Toma}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Especifique_Toma}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Toxicomanías:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Toxicomanías}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Especifique_Toxicomanías}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Grupo de sangre:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Grupo_Sangre}}
			</td>
			<td width="15%">
				<strong>RH de sangre:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->RH_Sangre}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Transfusiones:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Transfucion}}
			</td>
			<td width="15%">
				<strong>Fecha Ultima Transfusion:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				@if($patients->Fecha_Transfucion != null)
					{{$patients->Fecha_Transfucion}}
				@endif
				@if($patients->Fecha_Transfucion === null)
					Sin Transfuciones
				@endif
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Fracturas:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Fracturas}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Especifique_Fracturas}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Escolaridad:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Escolaridad}}
			</td>
			<td width="15%">
				<strong>Estado Civil:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Estado_Civil}}
			</td>
		</tr>
			<tr>
			<td width="20%">
				<strong>Ocupacion:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Ocupacion}}
			</td>
			<td width="15%">
				<strong>Deporte:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Deporte}}
			</td>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="20%">
				<strong>Operaciones:</strong>
			</td>
			<td width="80%" class="bg-element-tabla-datos">
			{{$patients->Operado}}
			</td>
		</tr>
	</tbody>
</table>
<br>
<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<th width="100%" class="bg-element-tabla-datos">
				<strong>Antecedentes Patológicos</strong>
			</th>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="20%">
				<strong>Diabetes Mellitus:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->DiabetesM}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Medicamentos_DiabetesM}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Hipertension Arterial:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Impertencion}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Medicamentos_Impertencion}}
			</td>
		</tr>
		<tr>
			<td width="20%">
				<strong>Otro tipo de cáncer:</strong>
			</td>
			<td width="15%" class="bg-element-tabla-datos">
				{{$patients->Otro_Cancer}}
			</td>
			<td width="15%">
				<strong>Especifique:</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				{{$patients->Especifique_Cancer_otro}}
			</td>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="15%">
				<strong>Recibió radioterapia:</strong>
			</td>
			<td width="5%" class="bg-element-tabla-datos">
				{{$patients->RT}}
			</td>
			<td width="15%">
				<strong>En que año:</strong>
			</td>
			<td width="10%" class="bg-element-tabla-datos">
				@if($patients->Fecha_RT != null)
					{{$patients->Fecha_RT}}
				@endif
				@if($patients->Fecha_RT === null)
					No Aplica
				@endif
			</td>
			<td width="15%">
				<strong>En que parte:</strong>
			</td>
			<td width="15%"  class="bg-element-tabla-datos">
				{{$patients->Parte_RT}}
			</td>
		</tr>

		<tr>
			<td width="15%">
				<strong>Recibió quimioterapia:</strong>
			</td>
			<td width="5%" class="bg-element-tabla-datos">
				{{$patients->QM}}
			</td>
			<td width="15%">
				<strong>En que año:</strong>
			</td>
			<td width="10%" class="bg-element-tabla-datos">
				@if($patients->Fecha_QM != null)
					{{$patients->Fecha_QM}}
				@endif
				@if($patients->Fecha_QM === null)
					No Aplica
				@endif
			</td>
			<td width="15%">
				<strong> Recibió inmunoterapia:</strong>
			</td>
			<td width="15%"  class="bg-element-tabla-datos">
				{{$patients->Inmunoterapia}}
			</td>
		</tr>
	</tbody>
</table>
<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="20%">
				<strong>Fecha aproximada:</strong>
			</td>
			<td width="10%" class="bg-element-tabla-datos">
				@if($patients->FechaInmune != null)
					{{$patients->FechaInmune}}
				@endif
				@if($patients->FechaInmune === null)
					No Aplica
				@endif
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				<strong>Infeciones por VHP:</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->Infeccion_VHP}}
			</td>
		</tr>

		<tr>
			<td width="20%">
				<strong>Infeciones por hepatitis B:</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->Infeccion_EpatitisB}}
			</td>
			<td width="20%">
				<strong>Infeciones por hepatitis C:</strong>
			</td>
			<td width="20%" class="bg-element-tabla-datos">
				{{$patients->Infeccion_EpatitisC}}
			</td>
		</tr>
	</tbody>
</table>
<br><br><br><br>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<th width="100%" class="bg-element-tabla-datos">
				<strong>Datos Gineco Obstetrico</strong>
			</th>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
		<tr>
			<td width="25%">
				<strong> Edad primera menstruación</strong>
			</td>
			<td width="25%" class="bg-element-tabla-datos">
				{{$patients->Edad_Menstruacion}}
			</td>
			<td width="25%">
				<strong>Numero De Embarazos</strong>
			</td>
			<td width="25%" class="bg-element-tabla-datos">
				{{$patients->Numero_Embarazos}}
			</td>
		</tr>
		<tr>
			<td width="25%">
				<strong>Cada cuanto menstrua</strong>
			</td>
			<td width="25%" class="bg-element-tabla-datos">
				{{$patients->Menstrua}}
			</td>
			<td width="25%">
				<strong>Cuanto dura la menstruación</strong>
			</td>
			<td width="25%" class="bg-element-tabla-datos">
				{{$patients->Dura_Menstruacion}}
			</td>
		</tr>
		<tr>
			<td width="25%">
				<strong>Fecha Ultimo Papanicolaou </strong>
			</td>
			<td width="25%" class="bg-element-tabla-datos">
				@if($patients->Fecha_Papanicolado != null)
					$patients->Fecha_Papanicolado}}
				@endif
				@if($patients->Fecha_Papanicolado === null)
					No Aplica
				@endif
			</td>
			<td width="25%">
				<strong>Fecha Ultima mastografia</strong>
			</td>
			<td width="25%" class="bg-element-tabla-datos">
				@if($patients->Fecha_Mastografia != null)
					{{$patients->Fecha_Mastografia}}
				@endif
				@if($patients->Fecha_Mastografia === null)
					No Aplica
				@endif
			</td>
		</tr>
	</tbody>
</table>

<table class="tabla-datos_paciente" width="100%">
	<tbody>
			<tr>
			<td width="50%">
				<strong>Edad en la que entro a la menopausia</strong>
			</td>
			<td width="50%" class="bg-element-tabla-datos">
				@if($patients->Fecha_Menopausia != null)
					{{$patients->Fecha_Menopausia}}
				@endif
				@if($patients->Fecha_Menopausia === null)
					No Aplica
				@endif
			</td>
		</tr>
	</tbody>
</table>


@stop