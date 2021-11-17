<link rel="stylesheet" href="css/style_header.css">
<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
<!--<div class="navbar-fixed">
<nav>
      <div class="nav-wrapper lime darken-2">
        <a href="#!" class="brand-logo right"><i class="material-icons">person</i>Blog de Sarahi J</a>
        <ul id="nav-mobile" class="left thide-on-med-and-down">-->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="?menu=bienvenido" class="brand-logo white-text"><i class="material-icons">audiotrack</i>El arte de enseñar musica Mexicana</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                
                <li><a href="?menu=acercade" >Acerca de:</a></li>

                <li><a href="?menu=logout">Cerrar Sesión</a></li>

                <!-- <li><a href="?menu=usuario">Usuario</a></li>-->
                <li><a href="?menu=alumnos">Alumnos</a></li>
            </ul>
        </div>
    </nav>
</div>

<?php
} else { ?>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo right white-text"><i class="material-icons">audiotrack</i>El arte de enseñar musica Mexicana</a>
            <ul id="nav-mobile" class="left thide-on-med-and-down">
                <li><a href="?menu=home">Inicio</a></li>

                <li><a href="?menu=bienvenida">¿Quienes somos?</a></li>
                <li><a href="?menu=login">Iniciar sesión</a></li>
               
                <!-- <li><a href="?menu=usuario">Usuario</a></li>-->



            </ul>
        </div>
    </nav>
</div>
<?php } ?>