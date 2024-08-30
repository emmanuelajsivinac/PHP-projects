<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Methods and Functions</title>
</head>
<body>

<?php

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
}

$object1 = new addition();
$object1->inputValue1(5);
#$object1->value2=10;
$object1->inputValue2(15);
$object1->operation();
$object1->showResult();

?>

</body>
</html>