<?php

// Algo to group by number max of the group
function groupByNbGroup($listPeople, $nbGroups){
  $listPeople = shuffle_assoc($listPeople);
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

// Put random the list of person
function shuffle_assoc($array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return $array;
}

// Algo to group by max personn
function groupByNbPerson($listPeople, $nbPerson){
  $allGroup = array();
  $listPeople = shuffle_assoc($listPeople);

  $j = 0;
  $i = 0;
  foreach ($listPeople as $personn) {
    if($j >= $nbPerson){
      $j = 0;
      $i++;
    }
    $allGroup[$i][$j] = $person;
    $j++;
  }
  return $allGroup;
}
