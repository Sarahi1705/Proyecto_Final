<link rel="stylesheet" href="css/style_login.css"/>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container">
    <div class="content">
        <div class="row | white">
            <!--<div class="col s2"></div>-->


            <?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
     
?>

            <h3>No tiene permisos para entrar a la página <h3>
                    <?php
}else {
?>
                    <br />
                    <br />

                    <form action="./controller/login.php" method="post" class="center | z-depth-3 center ">
                        <h2>Iniciar Sesión</h2>
                        <div class="row | form-row">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" placeholder="Ingresa tu nombre" id="usuario" name="usuario"
                                    class="validate" required />
                                <label for="usuario">Usuario:</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" id="password" name="password" class="validate" required />
                                <label for="password">Contraseña</label>
                            </div>
                            <button class="btn">
                                <i class="material-icons left">check</i>
                                Iniciar
                            </button>
                        </div>
                    </form>
                    <?php }?>



        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



