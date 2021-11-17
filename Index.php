<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
    <style>
       
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
   
  </head>
  <body>
    <header>
    <!--Encabezado-->
  <?php include 'views/header.php' ?>
      </header>
  <main>    
  <?php include 'controller/routing.php' ?> 
       
      </main>
     




 <!--Pie de pagina-->
 <?php include 'views/footer.php' ?>

      
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
