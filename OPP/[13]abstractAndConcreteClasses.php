<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract and Concrete Clases</title>
</head>
<body>

<?php

abstract class mathOperation
{
    protected $value1;
    protected $value2;

    protected function __construct($value1, $value2){
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    abstract public function getResult();
    abstract public function showResult();
}

class addition extends mathOperation
{
    private $result;

    public function __construct($value1, $value2)
    {
        parent::__construct($value1, $value2);
    }

    public function getResult()
    {
        $this->result = $this->value1 + $this->value2;
    }

    public function showResult()
    {
        echo '<p>The result of the addition is '.$this->result.'</p>';
    }
}

#$object1 = new mathOperation(1,5);
$object1 = new addition(3,5);
$object1->getResult();
$object1->showResult();
?>

</body>
</html>