<?php
   include 'layouts/header.php';
   require_once 'connect.php';
if(!empty($_POST)){
	$name = $_POST['Nombre'];
   $email = $_POST['Email'];
   $phone = $_POST['Telefono'];

   $sql = "INSERT INTO users(nombre,email,telefono) VALUES(:name,:email,:phone)";
   $query = $pdo->prepare($sql);
   $query->execute([
   		'name' => $name,
   		'email' => $email,
   		'phone' => $phone
   ]);
}

?>
<div class="container" style="margin-top:50px">
<h2>Formulario para agregar un nuevo usuario:</h2>
<form action="add-user.php" method="POST">
  <div class="form-row align-items-center">
    <div class="col-md-12 my-1">
    	<div class="input-group">
      <label class="sr-only" for="Nombre">Ingresa Nombre</label>
      <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
      <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="Enter Name">
  </div>
    </div>
    <br>
    <div class="col-md-12 my-1">
      <label class="sr-only" for="Email">Ingresa Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="Email" placeholder="Enter Email" name="Email">
      </div>
    </div>
    <div class="col-md-12 my-1">
      <label class="sr-only" for="Telefono">Ingresa teléfono:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-phone"></i></div>
        </div>
        <input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Enter Phone">
      </div>
    </div>
    <div class="col-auto my-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
        <label class="form-check-label" for="autoSizingCheck2">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto my-1">
      <input type="submit" class="btn btn-primary" value="Enviar" />
    </div>
  </div>
</form>
</div>
	
<?php
   include 'layouts/footer.php';
?>