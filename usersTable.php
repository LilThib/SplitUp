<!DOCTYPE html>
<?php
include './users.php';

$msg = "";
$name = (isset($_POST['name'])) ? trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING)) : "";
$sexe = (isset($_POST['sexe'])) ? $_POST['sexe'] : "";

if (isset($_POST['submitAdd'])) {
    addUser($name, $sexe);
    $msg = "Personne bien ajoutée";
    header("Location: usersTable.php");
}

if (isset($_GET['ClearTable'])) {
    ClearUsers();
    header("Location: usersTable.php");
}
?>

<html lang="en">
    <head>
        <title>Split-Up!</title>

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
                        <a class="nav-link" href="groups.php">Create groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage people</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <form class="form-horizontal" method="POST">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Ajouter une personne</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">Prénom</label>  
                                <div class="">
                                    <input id="firstname" name="name" type="text" placeholder="Jean-Michel" class="form-control col-md-8" required="" 
                                           value="<?php echo $name; ?>">
                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="control-label" for="sexe">Sexe</label>
                                <div class="">
                                    <div class="radio">
                                        <label for="sexe-0">
                                            <input type="radio" name="sexe" id="sexe-0" value="Homme" checked="checked">
                                            Homme
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="sexe-1">
                                            <input type="radio" name="sexe" id="sexe-1" value="Femme">
                                            Femme
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="sexe-2">
                                            <input type="radio" name="sexe" id="sexe-2" value="Autre">
                                            Autre
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <input id="submit" name="submitAdd" type="submit" value="Enregistrer" class="btn btn-default center-block" style="margin-top: 10px;">
                        <div class="text-center" style="margin-top: 10px;"><?php echo $msg; ?></div>
                        </fieldset>
                    </form>                   
                    <?php
                    if ($msg != "") {
                        echo '<div class="alert alert-danger">
                            ' . $msg . '
                        </div>';
                    }
                    ?>
                </div>
                <div class="col-sm-12 col-md-8">
                    <form action="ImportData.php" method="post" enctype="multipart/form-data">
                        <label for="file">Import de fichier texte ou csv:</label> <input type="file" name="file" id="file">
                        <input type="submit" value="Submit" class="btn btn-default center-block">
                    </form>
                    <?php
                    UsersTable();
                    ?>
                    <form name="clear">
                        <input id="ClearTable" name="ClearTable" type="submit" value="Vider le tableau" class="btn btn-default center-block" style="margin-top: 10px;">
                    </form>

                </div>
                <div class="col-sm-12 col-md-4">
                    <!--<p>
                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                    </p>-->
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
