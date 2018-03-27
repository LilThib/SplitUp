<?php
/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/

// Algo to group by number max of the group
function groupByNbGroup($listPeople, $nbGroups){
  $listPeople = shuffleAssoc($listPeople);
  $nbPeople = count($listPeople);
  $mod = $nbPeople % $nbGroups;
  $nbPerson = $nbPeople-$mod;
  $nbPerson = $nbPerson/$nbGroups;
  // $nbPerson : number of person per groups
  // $nbPeople : numper of people in total
  // $mod : number of person that cant be dispached equally between the groups

  $j=$nbGroups;
  $i=0;
  foreach($listPeople as $person)
  {
    if ($j>=$nbGroups)
    {
      $j=0;
    }
    //put the person in a group
    $groups[$j][$i] = $person;
    $j++;
    $i++;
  }
  return $groups;
}

// Randomizes the list of people
function shuffleAssoc($array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return $array;
}

// Algo to group by max people
function groupByNbPerson($listPeople, $nbPerson){
  $allGroup = array();
  $listPeople = shuffleAssoc($listPeople);

  $j = 0;
  $i = 0;
  foreach ($listPeople as $person) {
    if($j >= $nbPerson){
      $j = 0;
      $i++;
    }
    $allGroup[$i][$j] = $person;
    $j++;
  }
  return $allGroup;
}
