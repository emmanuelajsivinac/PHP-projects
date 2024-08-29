<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Collab</title>
</head>
<body>
<?php

class createHeader {
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    } 

    public function buildHeader() 
    {
        echo '<div style="background-color:black color:white">';
        echo "<h1>". $this->title ."</h1>";
        echo "</div>";
    }
}

class createBody {
    private $paragraph = array();

    public function inserLine($line)
    {
        $this->paragraph[] = $line;
    }

    public function buildParagraph()
    {
        for( $i = 0; $i < count($this->paragraph); $i++ )
        {
            echo '<p>'.$this->paragraph[$i].'</p>';
        }
    }
}

class createrFooter{
    private $footerText;

    public function __construct($footerText)
    {
        $this->footerText = $footerText;
    } 

    public function buildFooter() 
    {
        echo '<div style="background-color:white color:black">';
        echo "<h1>". $this->footerText ."</h1>";
        echo "</div>";
    }
}

class createSite{
    private $header;
    private $footer;
    private $content;

    public function __construct( $titleHeader, $footerText)
    {
        $this->header = new createHeader($titleHeader);
        $this->content = new createBody();
        $this->footer = new createrFooter($footerText);
    }

    public function createParagraph($contentText)
    {
        $this->content->inserLine($contentText);
    }

    public function buildItems(){
        $this->header->buildHeader();
        $this->footer->buildFooter();
        $this->content->buildParagraph();
    }
}

$object1 = new createSite("Test OPP","Guatemala 2024");
$object1->createParagraph("hi there?");
$object1->createParagraph("are you know that this is a test?");
$object1->createParagraph("this is a line from the new paragraph");
$object1->buildItems();
?>    
</body>
</html>