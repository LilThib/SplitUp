<?php
function groupByNbGroup($listPeople, $nbGroups){
  $nbPeople = count($listPeople);
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
    $groups[j][i] = $listPerson[i];
    $j++;
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
