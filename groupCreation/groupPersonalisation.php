<!DOCTYPE html>
<?php
/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/

?>
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
        <?php include_once'nav.html'; ?>
        <div class="container">
            <div class="row justify-content-center col-md-12">
                <h1>Bienvenue sur le site Split-Up!</h1>
            </div>
            <style>
fieldset{
  border : solid 1px red;
  padding : 0.5em;
}

            </style>
            <!--the form for maxPersonn -->
            <form action="GroupCreationAlgorithm.php" method="post">
              <fieldset><legend>répartition en fonction du nombre de personnes</legend>
                <label for="nbPpl"><input type="number" name="nbPpl"></label><input type="submit" value="créer" name="pplSubmit">

                </fieldset>
            </form>
          </br>
          <!--the form for maxGroups-->
          <form action="GroupCreationAlgorithm.php" method="post">
            <fieldset style="border-color:red;"><legend>répartition en fonction du nombre de groupes</legend>
              <label for="nbGrps"> <input type="number" name="nbGrps"></label><input type="submit" value="créer" name="grpsSubmit">
              </fieldset>
          </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
