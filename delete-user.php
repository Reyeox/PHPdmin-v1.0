<?php 
include 'layouts/header.php';
require_once 'connect.php';

 ?>
<div class="container" style="margin-top:50px">
	<h2>Eliminar un Usuario:</h2>
	<p>Aquí podrás eliminar un usuario, con sólo ingresar su dirección de correo electrónico.</p>
<div class="col-md-12 my-1">
      <label class="sr-only" for="Email">Ingresa Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="zform-control" id="Email" placeholder="Enter Email" name="Email">
      </div>
    </div>
<div class="col-md-12 my-1">
	<div class="input-group">
     	<input type="submit" class="btn btn-primary my-1" value="Borrar" >
    </div>
</div>
 </div>
<?php 
include 'layouts/footer.php';
 ?>