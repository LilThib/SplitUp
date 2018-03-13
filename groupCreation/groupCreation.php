<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Split-Up!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=MedievalSharp" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Iceland" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cherry+Cream+Soda" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Days+One" />
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body class="text-justify">
        <!--[nav]-->
        <nav class="navbar navbar-toggleable-md sticky-top">
            <button class="navbar-toggler navbar-toggler-right" style="color: lightgrey;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "style="padding-top: none;"><h1 style="margin-top:-15px;">&Congruent;</h1></span>
            </button>
            <a class="navbar-brand title1" style="font-family: Cherry Cream Soda" href="index.php">Split-Up</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usersTable.php">Manage people</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="col-md-12">
                <!--<div class="jumbotron">-->
                <p class="jumbotron">
                    Site en cours de développement
                </p>
            </div>

            <div class="row justify-content-center col-md-12">
                <h1>Bienvenue sur le site Split-Up!</h1>
            </div>
            <h2>Les groupes</h2>
            <?php
            if(isset($groupsRandom)){
                foreach ($groupsRandom as $groups) {
                  ?>
                  <table>
                    <tr>
                        <th>Nom</th>
                    </tr>
                      <?php
                      foreach ($groups as $person) {
                        ?>
                    <tr>
                        <td><?php echo $person[0]; ?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
            <?php
              }
            }
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
