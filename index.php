<!DOCTYPE html>
<?php
?>

<html lang="en">
    <head>
        <title>Blog-it</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=MedievalSharp" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Iceland" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cherry+Cream+Soda" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Days+One" />
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="text-justify">

        <!--<nav class="navbar navbar-default">
            <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!--        <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand titlel nav-link" href="index.php">Blog-IT</a> 
        <!--<a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link" href="post.php">Post</a>-->
        <!--        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active" onmouseover="this.style.backgroundColor = '#111111';" onmouseout="this.style.backgroundColor = '#000000';"><a href="index.html">Accueil</a></li>
                        <li onmouseover="this.style.backgroundColor = '#111111';" onmouseout="this.style.backgroundColor = '#000000';"><a href="detail.html">Detail</a></li>
                        <li onmouseover="this.style.backgroundColor = '#111111';" onmouseout="this.style.backgroundColor = '#000000';"><a href="gallery.html">Gallerie</a></li>
                        <li onmouseover="this.style.backgroundColor = '#111111';" onmouseout="this.style.backgroundColor = '#000000';"><a href="form.html">Formulaire</a></li>

                    </ul>
                </div>
        <!-- /.navbar-collapse -->
        <!--   </div>
        <!-- /.container-fluid -->
        <!--</nav>-->
        <nav class="navbar navbar-toggleable-md sticky-top">
            <button class="navbar-toggler navbar-toggler-right" style="color: lightgrey;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "style="padding-top: none;"><h1 style="margin-top:-15px;">&Congruent;</h1></span>
            </button>
            <a class="navbar-brand title1" style="font-family: Cherry Cream Soda" href="index.php">Blog-it</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.php">Post</a>
                    </li>
                    <!--<li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>-->
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="col-md-12">
                <!--<div class="jumbotron">-->
                <p class="jumbotron">
                    Fusce convallis, mauris imperdiet gravida bibendum, nisl 
                    turpis suscipit mauris, sed placerat ipsum urna sed risus. 
                    In convallis tellus a mauris. Curabitur non elit ut libero 
                    tristique sodales. Mauris a lacus. Donec mattis semper leo. 
                    In hac habitasse platea dictumst. Vivamus facilisis diam at 
                    odio. Mauris dictum, nisi eget consequat elementum, lacus 
                    ligula molestie metus, non feugiat orci magna ac sem. Donec 
                    turpis. Donec vitae metus. Morbi tristique neque eu mauris. 
                    Quisque gravida ipsum non sapien. Proin turpis lacus, 
                    scelerisque vitae, elementum at, lobortis ac, quam. Aliquam 
                    dictum eleifend risus. In hac habitasse platea dictumst. 
                    Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. 
                    In semper bibendum libero.
                </p>

            </div>

            <div class="row justify-content-center col-md-12">
                <h3>Dernières images</h3>
            </div>
            <div id="carouselExampleIndicators" class="col-md-12 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    /*
                     * for($i=0;$i<$img[].count;$i++)
                     * {
                     *      if($i==0)
                     *      {
                     *          echo "<li data-target="#carouselExampleIndicators" data-slide-to=$i class="active"></li>";
                     *      }
                     *      else
                     *      {
                     *          echo "<li data-target="#carouselExampleIndicators" data-slide-to=$i></li>";
                     *      }
                     * }
                     */
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    /*
                     * for($i=0;$i<$img[].count;$i++)
                     * {
                     *      if($i==0)
                     *      {
                     *       echo <div class="carousel-item active">;
                     *           echo <img class="d-block w-100" src=$img[i] alt=$legend[i]>;
                     *       echo </div>;
                     *      }
                     *      else
                     *      {
                     *          echo <div class="carousel-item">;
                     *              echo <img class="d-block w-100" src=$img[i] alt=$legend[i]>;
                     *          echo </div>;
                     *      }
                     * }
                     */
                    ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/skyrim1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/skyrim2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/skyrim3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/skyrim4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/skyrim5.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/skyrim6.jpg" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/skyrim7.jpg" alt="Seventh slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="col-md-4 hidden-xs hidden-sm">
                &nbsp;
            </div>
            <div class="col-md-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div><br/>


            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <p>
                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                    </p>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
