<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
<?php

class inputGenerator {
  private $labelText;
  private $placeholder;
  private $backgroundColor;
  private $fontColor;
  private $inputType;
  private $itemsAlign;

  public function __construct($lblText, $tmsAlign , $plcholder, $bckgrndColor, $nptType, $fntColor)
  {
    $this->labelText=$lblText;
    $this->itemsAlign= $tmsAlign;
    $this->placeholder=$plcholder;
    $this->fontColor=$fntColor;
    $this->backgroundColor=$bckgrndColor;
    $this->inputType=$nptType;

  }
  public function creatInput()
  {
    echo '<div style="font-size:40px;text-align:'.$this->itemsAlign.';background-color:'.$this->backgroundColor.';color:'.$this->fontColor.';">';
    echo '<label>'.$this->labelText.'</label><br>';
    echo '<input type='.$this->inputType.' placeholder='.$this->placeholder.'>';
    echo '</div>';
  }
}

$object1 = new inputGenerator('Name','Center','Name','#000000','text','#ffffff');
$object1->creatInput();

$object2 = new inputGenerator('Lastname','Center','Lastname','#000000','text','#ffffff');
$object2->creatInput();
?> 
</body> 
</html>