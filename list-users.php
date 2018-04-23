<?php
   include 'layouts/header.php';
   require_once 'connect.php';
   

   $queryResult = $pdo->query("SELECT * FROM users");

?>
<div id="app" class="container" style="margin-top: 50px;">
    <h2>Lista de Usuarios:</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php 
            while($row = $queryResult->fetch()){
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['telefono'] . '</td>';
            echo '</tr>';
   }
             ?>
        </tr>
        </tbody>
    </table>
</div>
<?php
   include 'layouts/footer.php';
?>