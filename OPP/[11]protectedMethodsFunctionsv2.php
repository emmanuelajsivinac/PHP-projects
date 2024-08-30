<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Methods and Functions</title>
</head>
<body>

<?php

/* We can overwrite methods using the parent:: keyword. However, when we use this keyword, 
we cannot edit the parent method; we can only use it to add extra code or call it without adding anything else. 
Remember, we have to respect the name, the number and type of parameters, 
and the return type from the parent class.  
*/

class operation
{
    protected $value1;
    protected $value2;
    protected $result;

    public function inputValue1($value1)
    {
        $this->value1 = $value1;
    }

    public function inputValue2($value2)
    {
        $this->value2 = $value2;
    }

    public function showResult ()
    {
        echo '<p>The result is: '.$this->result.'</p>';
    }

}

class addition extends operation
{
    public function operation()
    {
        $this->result = $this->value1 + $this->value2;
    }

    public function showResult ()
    {
        echo '<p>Addition--------</p><br>';
        #here only call the parents method
        parent::showResult();
    }
}

$object1 = new addition();
$object1->inputValue1(5);
$object1->inputValue2(15);
$object1->operation();
$object1->showResult();

?>

</body>
</html>