<?php

require_once "Animals.php";
require_once "../AnimalSpeechRecognition.php";

class Lion extends Animals implements AnimalSpeechRecognition
{
    public $vocal;
    public $sleep = 'zzzzzz';
    public $swim = 'splah';
    public $eat = 'yummy';


    public function __construct($vocal, $dnaSequence, $hunter, $age)
    {
        $this->vocalIn = $vocal;
        $this->age = $age;

        parent::__construct($dnaSequence, $hunter); # parent::setGeneSequence($dnaSequence);
    }
    public function getAge(){
        return $this->age;
    }
    public function getEat($eat){
        return $this->eat = $eat;
    }
    public function getSleep($sleep){
        return $this->sleep = $sleep;
    }
    public function getSwim($swim){
        return $this->swim = $swim;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setVocal($vocal)
    {
        $this->vocal = $vocal;
    }
    public function vocal($vocal) {
        return "I speak therefore I am: " . $this->vocalIn . "<br />n";
    }
    public function getGenes() {
        return " <br>-My DNA sequence is: " . parent::getGeneSequence() . "<br />";
    }
    public function getHunter($hunter)
    {
        return '<br>This animal a hunter? Answer: '.parent::getHunterStatus(). "<br />"; // TODO: Change the autogenerated stub
    }

}
$lion001 = New Lion('wrrrrr', 'ACCAAAGTAAC', 'yes', '3');
echo 'I am a '.get_class($lion001).' and '.$lion001->vocal($lion001->vocal).'<br>';
echo $lion001->getGenes();
echo '<br>';
echo $lion001->getHunterStatus($lion001->hunter);
echo '<br>My eating sound sounds like this: '.$lion001->eat;
echo '<br>My Age is: '.$lion001->age;


