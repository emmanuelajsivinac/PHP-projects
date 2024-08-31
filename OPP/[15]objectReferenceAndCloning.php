<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Reference and Cloning</title>
</head>
<body>    
<?php

class person {
  private $name;
  private $age;
  public function setData($name,$age)
  {
    $this->name=$name;
    $this->age=$age;
  }
  public function returnName()
  {
    return $this->name;
  }
  public function returnAge()
  {
    return $this->age;
  }
}

# -- Object reference
# First round data
$person1 =new person();
$person1->setData('John',20);
$variable=$person1;
echo 'People data ($person1):';
echo $person1->returnName().' - '.$person1->returnAge().'<br>';
echo 'Variable data ($variable):';
echo $variable->returnName().' - '.$variable->returnAge().'<br>';

# Second round data
$variable->setData('Ana',25);
echo 'Modifier data<br>';
echo 'People data ($person1):';
echo $person1->returnName().' - '.$person1->returnAge().'<br>';
echo 'Variable data ($variable):';
echo $variable->returnName().' - '.$variable->returnAge().'<br>';

# Object cloning
# $person2 have data from the second round data
$person2=clone($person1);
$person1->setData('Luis',50);
echo 'People data ($person1):';
echo $person1->returnName().' - '.$person1->returnAge().'<br>';
echo 'People 2 data ($person2):';
echo $person2->returnName().' - '.$person2->returnAge().'<br>';
?>
</body>
</html>