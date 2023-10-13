<?php

//Declarați o clasă numită Person cu două proprietăți: nume și varsta. Creați un constructor pentru această clasă care primește un nume și o vârstă ca argumente și le atribuie proprietăților corespunzătoare.
//Creați o instanță a clasei Person cu numele "John" și vârsta de 30 de ani. Afișați informațiile despre această persoană.

class Person{
    public $nume;
    public $varsta;

   

    public function __construct($nume,$varsta){
        $this->nume="John";
        $this->varsta = 30;

    }
    public function detalii(){
        echo $this->nume." are ".$this->varsta." de ani"; 
    }
}
// Declarați o altă clasă numită Student care extinde clasa Person. Adăugați o proprietate suplimentară numită facultate. 
// Modificați constructorul pentru a primi și seta numele facultății.
class Student extends Person{
    public function __construct($nume,$varsta){
        $this->nume="Alice";
        $this->varsta = 25;

    }
    
    public $facultate = "informatica";

    public function getFacultate()
    {
        echo "Facultatea {$this->facultate}";


}
// Creați o instanță a clasei Student cu numele "Alice", vârsta de 25 de ani și facultatea "Informatică".
 //Afișați informațiile despre acest student. Sunt in index2.php
public function detali(){
     echo "Studentul are numele de ".$this->nume." in varsta de ".$this->varsta."si este student la ".$this->facultate;
}

// Adăugați o metodă numită afiseazaDetalii la clasa Student care afișează numele, vârsta și facultatea studentului. Apoi 
//apelați această metodă pentru instanța de student creată în exercițiul anterior. index2.php rezultatul
public function Info(){
    echo $this->nume." are ".$this->varsta." de ani  si este la facultatea de ".$this->facultate;
}

}

;
?>
