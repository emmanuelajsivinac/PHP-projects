<html>
<head>
<title>Attributes</title>
</head>
<body>
<?php
class addLinks {

    #Attributes
  private $links=array();
  private $titles=array();

    #Methods
  public function uploadOptions($lnks,$ttls)
  {
    $this->links[]=$lnks;
    $this->titles[]=$ttls;
  }

  public function showItems()
  {
    for($i=0;$i<count($this->links);$i++)
    {
      echo '<a href="'.$this->links[$i].'">'.$this->titles[$i].'</a>';
      echo "-";
    }
  }
}

# Objects
$object1 = new addLinks();
$object1->uploadOptions('https://github.com/','Github');
$object1->uploadOptions('https://hub.docker.com/','Docker hub');
$object1->uploadOptions('https://code.visualstudio.com/','Visual Studio Code');
$object1->showItems();

$object2 = new addLinks();
$object2->uploadOptions('https://www.twitch.tv/','Twitch');
$object2->uploadOptions('https://discord.com/','Discord');
$object2->showItems();
?>
</body>
</html>