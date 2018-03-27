<?php
/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/

 ?>

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
        <?php include_once'nav.html'; ?>
        <div class="container">
            <div class="row justify-content-center col-md-12">
                <h1>Bienvenue sur le site Split-Up!</h1>
            </div>
            <h2>Les groupes</h2>
            <?php
            if(isset($groupsRandom)){
              $i = 0;
                foreach ($groupsRandom as $groups) {
                  $i++;
                  ?>
                  <table>
                    <tr>
                        <th><?php
                        if($rest&&$i==count($groupsRandom))
                        {
                          echo "reste";
                        }else{
                          echo "groupe  $i";
                        }; ?></th>
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
