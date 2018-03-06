<?php
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


function groupByNbPerson($listPeople, $nbPerson){
  $allGroup = array();
  $oneGroup = array();
  $trueNoPeople = 0;

  $listPeople = shuffle_assoc($listPeople);

  $nbGroup = ceil(count($listPeople) / $nbPerson);


  //Create groups
  for($i = 0; $i < $nbGroup; $i++){
    // Put people in a group
    for($j = 0; $j < $nbPerson; $j++){
      try{
        array_push($onegroup, $listPeople[$j+$trueNoPeople]);
      } catch (Exception $ex) {
        break;
      }
    }
    array_push($allGroup, $oneGroup);
    $oneGroup = array();
    $trueNoPeople = $trueNoPeople + 5;
  }
}
