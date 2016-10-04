<?php


require_once "Animals.php";
require_once "../AnimalSpeechRecognition.php";
class Bee extends Animals implements AnimalSpeechRecognition{
    public $vocal;
    public $dnaSequence;
    public $hunter;
    public $fly = 'woohooo';
    public $sleep = 'zzzzzz';

    public function __construct($vocal, $dnaSequence, $hunter, $age)
    {
        $this->vocalIn = $vocal;
        $this->age = $age;
        parent::__construct($dnaSequence, $hunter); # parent::setGeneSequence($dnaSequence);
    }
    public function getAge(){
        return $this->age;
    }
    public function getFlight($fly){
        $this->fly = $fly;
    }
    public function getSleep($sleep){
        $this->sleep = $sleep;
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
    public function getHunterStatus($hunter)
    {
        return '<br>This animal a hunter? Answer: '.parent::getHunterStatus($hunter); // TODO: Change the autogenerated stub
    }
}
$bee001 = New Bee('Bzzz bzzzzzt bzz', 'GGGTAC', 'no', 0.5);
echo 'I am a '.get_class($bee001).' and '.$bee001->vocal($bee001->vocal);
echo $bee001->getGenes();
echo $bee001->getHunterStatus($bee001->hunter);
echo '<br>My flying sound is: '.$bee001->fly;
echo '<br>My sleeping sound is: '.$bee001->sleep;
echo '<br>My age is: '.$bee001->age;
