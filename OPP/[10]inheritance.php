<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    
<?php
/*In PHP, unlike other object-oriented languages ​​(C++), a class can only be derived from a single class,
that is, PHP does not allow multiple inheritance.*/
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

# If we see that two classes answer the question ClassA "..is a.." ClassB it is possible that there is an inheritance relationship.
class addition extends operation
{
    public function operation()
    {
        $this->result = $this->value1 + $this->value2;
    }
}

class substraction extends operation
{
    public function operation()
    {
        $this->result = $this->value1 - $this->value2;
    }
}

$object1 = new addition();
$object1->inputValue1(3);
$object1->inputValue2(3);
$object1->operation();
$object1->showResult();
?>

</body>
</html>