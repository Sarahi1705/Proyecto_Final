
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>




    <!--inicio del encabezado-->

   

    <link rel="stylesheet" href="css/style_bienvenida.css">
    <section class="black">
    <div class="carousel carousel-slider" data-indicators="true">
        <div class="carousel-fixed-item">
            <div class="container">
                <h1 class="white-text">Bienvenido

                </h1>

            </div>
        </div>
        <div class="carousel-item slime-item01   black-text" href="#one!">
            <div class="container">

            </div>
        </div>
        <div class="carousel-item  slime-item02 black-text" href="#two!">
            <div class="container">

            </div>
        </div>
        <div class="carousel-item  slime-item01 black-text" href="#three!">
            <div class="container">

            </div>
        </div>
        <div class="carousel-item  slime-item02  black-text" href="#four!">
            <div class="container">

            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">

        <div class="col s6">
            <!-- Promo Content 1 goes here -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="Img/mistro.jpeg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Maestros<i
                            class="material-icons right">more_vert</i></span>
                    
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Maestros<i
                            class="material-icons right">close</i></span>
                    <p>Unidos para enfrentar esta situación de pandemia y llevar a los alumnos aprendizajes de música.</p>
                </div>
            </div>
</div>
            <div class="col s6">
                <!-- Promo Content 2 goes here -->
                <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="Img/alum.jpeg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Alumnos<i
                            class="material-icons right">more_vert</i></span>
                    
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Alumnos<i
                            class="material-icons right">close</i></span>
                    <p>Comprometidos aprender y seguir nuestros sueños de hacer música.</p>
                </div>
            </div>

</div>

    </div>
</div>



<!-- Gitter Chat Link -->

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

