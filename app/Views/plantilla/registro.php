<form class="form" onsubmit="">
	<label class="formulario" for="nombre">Nombre(s):</label>
	<input class="datos" type="text" name="nombre" placeholder="Escribe tu nombre" maxlength="30" id="nombre">
	


	<label class="formulario" for="ap1">Apellido Paterno:</label>
	<input class="datos" type="text" name="apellido1" placeholder="Primer Apellido" maxlength="30" id="ap1">



	<label class="formulario" for="ap2">Apellido materno:</label>
  <input class="datos" type="text" name="apellido2" placeholder="Segundo apellido" maxlength="30" id="ap2">
  
  <label class="formulario" for="ap2">Correo</label>
	<input class="datos" type="email" name="apellido2" placeholder="@tucorreo" maxlength="30" id="ap2">

	<input type="submit" value="Registrar" id="btnRegistro">

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="btnRegistro">
  Iniciar sesion 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Inicio de sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <!--Formlario de inicio de sesion-->
    <form style="background-color: black;">
    <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName" style="color: black;">Nombre</label>
      <input type="text" class="form-control" id="inlineFormInputName" placeholder="Su nombre">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername">Usario</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
      </div>
    </div>
    <div class="col-auto my-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
        <label class="form-check-label" for="autoSizingCheck2" style="color: black;">
          Recordarme
        </label>
      </div>
    </div>
    
  </div>
</form>
<!--fin del formulario inicio-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Ingresar</button>
      </div>
    </div>
  </div>
</div>
</form>


<!--fin del formulario inicio-->
<style>

.form {
	/*para la alineacion en medio*/
	margin: 0 auto;
	/*Ancho del form*/
	width: 30%;
	/*Atributos del borde*/
    border:2px solid #ccc;
    border-radius: 5px;
	/*tamaño del form*/
    padding:50px;
    background-color: #2b2b2c;
    
    color: #ffff;

}
.formulario {
	/*Tamaño de la letra*/
	font-size: 20px;
	/*Para que se ponga arriba del input*/
	display: block;
	width: 100%;
}


.datos{
	margin-bottom: 20px;
	width: 100%;
	

	box-sizing: border-box;
	border: 2px solid #ccc;
}
.datos:focus, textarea:focus{
	border:1px solid #1668c4;
}
#btnRegistro[type="submit"]{
	margin-bottom: 0;
	background: #1668c4;
	color: #fff;
	height: 40px;
	border: none;
}
#btnRegistro[type="submit"]:hover{
	background: #4A88F4;
}
</style>
