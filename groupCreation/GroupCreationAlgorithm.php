<?php

session_start();
// Variables

$button = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
$msg = "";
$listPerson = (isset($_SESSION['listPerson']))?$_SESSION['listPerson']:"";

if($button == NULL || $button = FALSE)
{
  $msg .= "Impossible de créer un groupe réesayyer ultérieurement";
}
else{
  if($button == "maxGroup"){
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
  else if($button == "maxPerson"){

  }
}
