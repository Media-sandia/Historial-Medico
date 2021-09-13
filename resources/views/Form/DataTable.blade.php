@extends("layouts.layaut")

@section("Contenido")

<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 align-self-center">
				<h4 class="page-title">Pacientes</h4>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<table class="table table-sm m-b-0 " id="DataPaciente" name="DataPaciente">
					<thead class="thead-index-pacientes">
						<tr>
							<th>ID</th>
							<th>Nombre Del Paciente</th>
							<th>Domicilio</th>
							<th>Ciudad</th>
							<th>CP</th>
							<th>Telefono</th>
							<th>Panel</th>
						</tr>
				   </thead>
				</table><!--End Table-->
				<center>
                    <div id="loading">
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    </div>
                </center>
			</div><!--End card-body-->
		</div><!--End card-->
	</div><!--End container -->
</div> <!--End page-wrapper -->
<script src="assets/lib/js/jquery/jquery.min.js"></script>
<script src="request/TablePacients.js"></script>
@endsection