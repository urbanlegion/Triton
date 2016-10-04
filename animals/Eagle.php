<?php



require_once "Animals.php";
require_once "../AnimalSpeechRecognition.php";
class Eagle extends Animals implements AnimalSpeechRecognition{
    public $vocal;
    public $dnaSequence;
    public $hunter;
    public $sleep = 'zzzzz';
    public $eat ='Yummy';
    public $fly = 'woohooo';

    public function __construct($vocal, $dnaSequence, $hunter, $age)
    {
        $this->age = $age;
        $this->vocalIn = $vocal;
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
$eagle001 = New Eagle('AMERICAAAA CAA CAA', 'TCGGAAGT', 'yes', 9);
echo 'I am a '.get_class($eagle001).' and '.$eagle001->vocal($eagle001->vocal);
echo $eagle001->getGenes();
echo $eagle001->getHunterStatus($eagle001->hunter);
echo '<br>My flying sound is: '.$eagle001->fly;
echo '<br>My sleeping sound is: '.$eagle001->sleep;
echo '<br>My eating sound sounds like this: '.$eagle001->eat;
echo '<br>My age is: '.$eagle001->age;