<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Type Parameter</title>
</head>
<body>
<?php
class option {
    private $titleText;
    private $link;
    private $backgroundColor;
    public function __construct($titleText,$link,$backgroundColor)
    {
      $this->titleText=$titleText;
      $this->link=$link;
      $this->backgroundColor=$backgroundColor;
    }
    public function buildOptions()
    {
      echo '<a style="background-color:'.$this->backgroundColor.
           '" href="'.$this->link.'">'.$this->titleText.'</a>';
    }
  }
  
  class menu {
    private $opcion=array();
    private $directionText;
    public function __construct($directionText)
    {
      $this->directionText=$directionText;
    }
    public function insertOption($opcion)
    {
      $this->opcion[]=$opcion;
    }
    private function buildH()
    {
      for($f=0;$f<count($this->opcion);$f++)
      {
        $this->opcion[$f]->buildOptions();
      }
    }
    private function buildV ()
    {
      for($f=0;$f<count($this->opcion);$f++)
      {
        $this->opcion[$f]->buildOptions();
        echo '<br>';
      }
    }
    public function buildItems()
    {
      if (strtolower($this->directionText)=="horizontal")
        $this->buildH();
      else
        if (strtolower($this->directionText)=="vertical")
          $this->buildV();
    }
  }
  
  $menu1=new menu('horizontal');
  $opcion1=new option('Google','http://www.google.com','#C3D9FF');
  $menu1->insertOption($opcion1);
  $menu1->buildItems();
?>
</body>
</html>