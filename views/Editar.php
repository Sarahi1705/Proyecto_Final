<link rel="stylesheet" href="css/style_diseño.css"/>
<div class="container">
<form action="./controller/CambiarDatos.php" method="POST" class="center | z-depth-3 center" >
                    
    <input type="hidden" name="id" value="<?php echo  $sqlAlumnos['id']  ?>">
    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo  $sqlAlumnos['nombre']  ?>">
    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo  $sqlAlumnos['sexo']  ?>">
                                
    <input type="submit" class="btn btn-primary btn-block" value="Guardar">
</form>
</div>