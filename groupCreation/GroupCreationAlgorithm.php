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


$maxPersonValue = abs($maxPersonValue)==0?1:abs($maxPersonValue);
$nbGroups = abs($nbGroups)==0?1:abs($nbGroups);

$rest = false;

$msg = "";
$listPerson = GetList();
// If the list is empty
if($listPerson === array())
{
  header("location:../usersTable.php");
}
$groupsRandom = array();
// If there is a problem with server or html
if($buttonMaxPerson === NULL && $buttonMaxPerson === FALSE && $buttonMaxGroup===NULL
  && $buttonMaxGroup === FALSE)
{
  $msg .= "Impossible de créer un groupe réessayer ultérieurement";
}
// Create groups with the given button function
else{
  // For maxGroups
  if($buttonMaxGroup !== NULL && $buttonMaxGroup !== FALSE){
      $groupsRandom = groupByNbGroup($listPerson, $nbGroups);
    }

  // For maxPerson
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
