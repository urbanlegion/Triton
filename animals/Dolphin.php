<?php


require_once "Animals.php";
require_once "../AnimalSpeechRecognition.php";

class Dolphin extends Animals implements AnimalSpeechRecognition
{
    public $vocal;
    public $sleep = 'zzzzzz';
    public $swim = 'splah';


    public function __construct($vocal, $dnaSequence, $hunter, $age)
    {
        $this->vocalIn = $vocal;
        $this->age = $age;

        parent::__construct($dnaSequence, $hunter); # parent::setGeneSequence($dnaSequence);
    }
    public function getAge(){
        return $this->age;
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
        return '<br>This animal a hunter? Answer: '.parent::getHunterStatus(); // TODO: Change the autogenerated stub
    }

}
$willy001 = New Dolphin('eee eeeee eee eeek eeek', 'TCAGGATCCA', 'no', '8');
echo 'I am a '.get_class($willy001).' and '.$willy001->vocal($willy001->vocal);
echo $willy001->getGenes();
echo 'this is the sleep sound: '.$willy001->sleep.'<br>';
echo 'My age is: '.$willy001->getAge();
echo $willy001->getHunter($willy001->hunter);
echo 'My swim sound is: '.$willy001->swim;
