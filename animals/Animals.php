<?php


abstract class Animals //This is an abstract polymorphic class that would be extended to any living creature.
{
    private $dnaSequence;
    public $hunter;
    public function __construct($dnaSequence, $hunter)
    {
        $this->dnaSequence = $dnaSequence;
        $this->hunter = $hunter;
    }

    public function setGeneSequence($dnaSequence)
    {
        $this->dnaSequence = $dnaSequence;
    }

    public function getGeneSequence()
    {
        return $this->dnaSequence;
    }

    /*HERE*/


        public function setHunter($hunter){
            $this->hunter = $hunter;

        }
       public function getHunterStatus(){
           if($this->hunter == 'yes') {
               //$this->hunter = $hunter;
               return  '<b>'.$this->hunter.'</b>, This '.get_class($this).' is a hunter.';

           }elseif($this->hunter == 'no'){
               return  '<b>'.$this->hunter.'</b>, This '.get_class($this).' is not a hunter.';
           }
           else{
               $hunter = null;
               return 'You have not set hunter parameter for '.get_class($this).'. param must be yes/no';
           }
//           return $this->hunter;
        }
}