$nbPeople;
$nbGroups;
$mod = $nbPeople % nbGroups;
$nbPerson = $nbPeople-$mod
$nbPerson = $nbPerson/$nbGroups;
// $nbPerson : number of person per groups
// $nbPeople : numper of people in total
// $mod : number of person that cant be dispached equally between the groups

j=$nbGroups;
for(i=0;i<$nbPeople;i++)
{
  if (j>=$nbGroups)
  {
    j=0;
  }


  j++;
}