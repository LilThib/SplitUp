<?php
/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/

function FormulaireDyn($nbPerson) {
    $finalHTML ="";
    $finalHTML .= '<form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>Nom des personnes</legend>';

    for ($i=0; $i < $nbPerson; $i++) {
      $personXX = "person" . $nbPerson;
      $finalHTML .=
      '<!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="' . $personXX . '">Personne N°' . $i . '</label>
          <div class="col-md-4">
          <input id="' . $personXX . '" name="' . $personXX . '" type="text" placeholder="nom de la personne" class="form-control input-md" required="">
          </div>
        </div>';
    }

    $finalHTML .=
    '<!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-default">Envoyer</button>
      </div>
    </div>

    </fieldset>
    </form>';

    echo $finalHTML;
}
