<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwrite Constructor Function</title>
</head>
<body>
    
<?php

class operation
{
    protected $value1;
    protected $value2;
    protected $result;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function showResult()
    {
        echo '<p> The result is: '.$this->result.'</p>';
    }
}

class addition extends operation
{
    protected $value3;

    public function __construct($value1,$value2,$value3)
    {
        # To Overwrite the Constructor Function we new use the parent:: keyword.        
        parent::__construct($value1,$value2);
        $this->value3 = $value3;
    }

    public function getAddition()
    {
        $this->result = $this->value1+$this->value2+$this->value3;
    }
}

$object1 = new addition(3,4,3);
$object1->getAddition();
$object1->showResult();

?>

</body>
</html>