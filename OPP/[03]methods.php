<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>
<body>
<?php
class header{

    # Attributes
    private $titleValue;
    private $textAlign;
    private $backgroundColor;
    private $fontColor;

    # Methods
    public function __construct($titleValue, $textAlign, $backgroundColor, $fontColor)
    {
        $this->titleValue = $titleValue;
        $this->textAlign = $textAlign;
        $this->backgroundColor = $backgroundColor;
        $this->fontColor = $fontColor;
    }

    public function createHeader(){
        echo '<div style = "font-size:40px; text-align:'.$this->textAlign.'; background-color:'.$this->backgroundColor.'; color:'.$this->fontColor.'">';
        echo $this->titleValue;
        echo '</div>';
    } 
}

$object1 = new header("Bienvenido","center","#000000","#ffffff");
$object1->createHeader();

$object2 = new header("This is a example","center","#ffffff","#000000");
$object2->createHeader();
?>    
</body>
</html>
