<link rel="stylesheet" href="css/style_login.css"/>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php
if (filter_input_array(INPUT_POST)) {
$_usuario = trim(filter_input(INPUT_POST, 'usuario'));
$_pswd = trim(filter_input(INPUT_POST, 'password'));
include_once '../model/Alumnos.php';
include "../views/login.php";
$loginok = alumnos::login($_usuario, $_pswd);
echo '<script>
Swal.fire({
 icon: "error",
 title: "Oops...",
 text: "¡Este usuario no existe!",
 showConfirmButton: true,
 confirmButtonText: "Cerrar"
 }).then(function(result){
    if(result.value){                   
     window.location = "../index.php?menu=401";
    }
 });
</script>';
print_r($loginok);
if ($loginok){
header("location: ../index.php?menu=bienvenido");
}
}
?>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js" integrity="sha256-jAlCMntTd9fGH88UcgMsYno5+/I0cUCWdSjJ9qHMFRY=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>