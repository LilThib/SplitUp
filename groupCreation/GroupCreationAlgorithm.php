<?php

/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/



include_once'../users.php';
// Variables

require_once 'functionsGroup.php';
$buttonMaxPerson = filter_input(INPUT_POST, 'pplSubmit', FILTER_SANITIZE_STRING);
$buttonMaxGroup = filter_input(INPUT_POST, 'grpsSubmit', FILTER_SANITIZE_STRING);
$maxPersonValue = filter_input(INPUT_POST, 'nbPpl', FILTER_VALIDATE_INT);
$nbGroups  = filter_input(INPUT_POST, 'nbGrps', FILTER_VALIDATE_INT);

$rest = false;

$msg = "";
$listPerson = GetList();
if($listPerson === array())
{
  header("location:")
}
$groupsRandom = array();
if($buttonMaxPerson === NULL && $buttonMaxPerson === FALSE && $buttonMaxGroup===NULL
  && $buttonMaxGroup === FALSE)
{
  $msg .= "Impossible de créer un groupe réessayer ultérieurement";
}
else{
  if($buttonMaxGroup !== NULL && $buttonMaxGroup !== FALSE){
      $groupsRandom = groupByNbGroup($listPerson, $nbGroups);
    }

  else if($buttonMaxPerson !== NULL && $buttonMaxPerson !== FALSE){

    if($maxPersonValue !== NULL && $maxPersonValue !== FALSE){
      $groupsRandom = groupByNbPerson($listPerson, $maxPersonValue);
      if ($groupsRandom[count($groupsRandom)-1] != $maxPersonValue) {
        $rest = true;
    }

    }
    else{
      header('Location:groupPersonalisation.php?msg="Veuillez remplir avec que
      des nombres le champ \"Le nombre de personne max\" "');
    }
  }
}

include_once'groupCreation.php';
