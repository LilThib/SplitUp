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

$buttonMaxPersonn = filter_input(INPUT_POST, 'btnMaxPerson', FILTER_SANITIZE_STRING);
$buttonMaxGroup = filter_input(INPUT_POST, 'btnMaxGroup', FILTER_SANITIZE_STRING);
$msg = "";
$listPerson = (isset($_SESSION['listPerson']))?$_SESSION['listPerson']:"";

if($buttonMaxPersonn === NULL && $buttonMaxPersonn === NULL && $buttonMaxGroup===NULL
  && $buttonMaxGroup === FALSE)
{
  $msg .= "Impossible de créer un groupe réessayer ultérieurement";
}
else{
  if($buttonMaxGroup !== NULL && $buttonMaxGroup !== FALSE){
    $nbPeople;
    $nbGroups;
    $mod = $nbPeople % $nbGroups;
    $nbPerson = $nbPeople-$mod
    $nbPerson = $nbPerson/$nbGroups;
    // $nbPerson : number of person per groups
    // $nbPeople : numper of people in total
    // $mod : number of person that cant be dispached equally between the groups

    $j=$nbGroups;
    for($i=0;$i<$nbPeople;$i++)
    {
      if ($j>=$nbGroups)
      {
        $j=0;
      }
      //put the person in a group

      $j++;
    }
  }
  else if($buttonMaxPersonn !== NULL && $buttonMaxPersonn !== FALSE){

    $maxPersonValue = filter_input(INPUT_POST, 'maxPerson', )

  }
}

include_once'groupCreation.php';
