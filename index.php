<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test your Knowledge </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
          <div class="container-fluid">
              <a class="navbar-brand" href="#"><h1>Quizzer</h1></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Genres</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Contribute</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Sign In</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>

        <div class = "row jumbotron">
          <div class = "container">
            <p><h3>This is a platform to conduct any quiz competition for organisations or simply
             a place for quiz enthusiasts to have some fun</h3></p>
            </div>
        </div>

        <div class="container">
          <div class="row">
           <div class="col-9">
              <h1>Today's Trivia:</h1>
            </div>
            <div class="col-3">
              <img src="images/light.png">
            </div>
          </div>

          <div class="container">
            <div class = "jumbotron">
              <?php
              include 'trivia.php';
              factScrap();
              ?>

            </div>
          </div>
        </div>


<!--regex for data scrapper = "<li class="top-100-li">\s<h2>(.*?)<\/h2>\s<p><img class="aligncenter size-full wp-image-.*?" src=".*?" alt=".*?" width="686" height="300" \/><br \/>\s.*?<\/p>\s.*?<\/li>
"-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
