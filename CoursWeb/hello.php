<?php

class Poo
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';

    function aMemberFunc()
    {
        print 'Inside `aMemberFunc()`';   
    }
}


$foo = new Poo;







class Movie
{
    protected $movieName = 'name Film Name';
    protected $movieDescription = 'description Film Description';
    protected $movieTime = 'time Time';
    protected $movieReleaseYear = 'releaseYear Year of Release';
    
    public function __construct($name = "", $description = "", $time = "", $releaseYear = "")
    {
        $this->movieName = $name;
        $this->movieDescription = $description;
        $this->movieTime = $time;
        $this->movieReleaseYear = $releaseYear;        
    }
    
    
    public function getName()
    {
        return $this->movieName;        
    }
    
    public function setName($name ="")
    {
        $this->movieName = $name;
    }
    
    
    function funcPrint()
    {
        echo $this->movieName . "\n" . $this->movieDescription . "\n" . $this->movieTime . "\n" . $this->movieReleaseYear . "\n";
    }
}

$Sharknado = new Movie("Sharknado","avec des requins","2h","2011");
$Sharknado->funcPrint();
$Sharknado->setName("SHARKNADO");
echo $Sharknado->getName();