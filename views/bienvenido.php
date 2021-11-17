<link rel="stylesheet" href="css/style_bienvenido.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<?php
// Devolver los valores de sesión
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
<div class="content">
    <section class="black">
        <div class="carousel carousel-slider" data-indicators="true">
            <div class="carousel-fixed-item">
                <div class="container">
<h1 class="white-text">Bienvenido  Maestro(a)| <?php echo $_SESSION["loggedUserName"]; ?></h1>
</div>
            </div>
            <div class="carousel-item slime-item01   white-text" href="#one!">
                <div class="container">
                    
                </div>
            </div>
            <div class="carousel-item  slime-item02 white-text" href="#two!">
                <div class="container">
                  
                </div>
            </div>
            <div class="carousel-item  slime-item01 white-text" href="#three!">
                <div class="container">
                    
                </div>
            </div>
            <div class="carousel-item  slime-item02  white-text" href="#four!">
                <div class="container">
                    
                </div>
            </div>
        </div>
    </section>
</div>


<?php
}  ?>

<script>
    // CAROUSEL
    $(document).ready(function () {
        $('.carousel').carousel(
            {
                dist: 0,
                padding: 0,
                fullWidth: true,
                indicators: true,
                duration: 50,
            }
        );
    });

    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 3000);
    }
</script>