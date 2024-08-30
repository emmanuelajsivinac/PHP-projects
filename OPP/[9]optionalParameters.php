<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class buildHeader
{
    private $titleHeader;
    private $backgroundColor;
    private $fontColor;
    private $textAlign;

    public function __construct($titleHeader = 'Empty', $backgroundColor = '#000000', $fontColor = '#ffffff', $textAlign = 'center')
    {
        $this->titleHeader = $titleHeader;
        $this->backgroundColor = $backgroundColor;
        $this->fontColor = $fontColor;
        $this->textAlign = $textAlign;
    }

    public function builItem()
    {
        echo '<div style="background-color:'.$this->backgroundColor.';color:'.$this->fontColor.';text-align:'.$this->textAlign.'">';
        echo '<p>'.$this->titleHeader.'</p>';
        echo '</div>';    
    }

}

$object1 = new buildHeader('This is a Title');
$object1->builItem();

?>
</body>
</html>