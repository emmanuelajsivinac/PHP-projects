<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Methods</title>
</head>
<body>
<?php

class createTable {
  private $matrixTable=array();
  private $rows;
  private $columns;

  public function __construct($rows,$columns)
  {
    $this->rows=$rows;
    $this->columns=$columns;
  }

  public function upLoadValues($nmbRow,$nmbColumns,$value)
  {
    $this->matrixTable[$nmbRow][$nmbColumns]=$value;
  }

  #public function
  private function startTable()
  {
    echo '<table border="1">';
  }
    
  #public function
  private function startRow()
  {
    echo '<tr>';
  }

  #public function
  private function addValueToShow($nmbRow,$nmbColumns)
  {
    echo '<td>'.$this->matrixTable[$nmbRow][$nmbColumns].'</td>';
  }

  #public function
  private function closeRow()
  {
    echo '</tr>';
  }

  #public function
  private function closeTable()
  {
    echo '</table>';
  }

  public function makeTheTable()
  {
    $this->startTable();
    for($f=0;$f<$this->rows;$f++)
    {
      $this->startRow();
      for($c=0;$c<$this->columns;$c++)
      {
        $this->addValueToShow($f,$c);
      }
      $this->closeRow();
    }
    $this->closeTable();
  }
}

$object1 = new createTable(2,2);
$object1->upLoadValues(0,0,"A1");
#$object1->closeTable(); 
$object1->upLoadValues(0,1,"B1");
$object1->upLoadValues(1,0,"A2");
$object1->upLoadValues(1,1,"B2");
#$object1->closeTable(); 
$object1->makeTheTable();
?>
</body>
</html>