<?php

/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Date Begin: 20.03.2018
*/

session_start();
// Variables

require_once 'functionsGroup.php';
$buttonMaxPerson = filter_input(INPUT_POST, 'btnMaxPerson', FILTER_SANITIZE_STRING);
$buttonMaxGroup = filter_input(INPUT_POST, 'btnMaxGroup', FILTER_SANITIZE_STRING);
$maxPersonValue = filter_input(INPUT_POST, 'maxPerson', FILTER_VALIDATE_INT);

$msg = "";
$listPerson = (isset($_SESSION['listPerson']))?$_SESSION['listPerson']:"";
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
  }
  else if($buttonMaxPerson !== NULL && $buttonMaxPerson !== FALSE){

    if($maxPersonValue !== NULL && $maxPersonValue !== FALSE){
      $groupsRandom = groupByNbPerson($listPerson, $maxPersonValue);
    }
    else{
      header('Location:groupPersonalisation.php?msg="Veuillez remplir avec que
      des nombres le champ \"Le nombre de personne max\" "');
    }
  }
}

include_once'groupCreation.php';
