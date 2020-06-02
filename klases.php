<?php
include_once 'informacija.php';
class Straipsnis {
//motininė klasė, pagal kurią kuriami straipsniai
    var $pavadinimas;
    var $antraste;
    var $paveiksliukas;
    var $tekstas;


    public function __construct($pav, $ant, $img, $txt)
    {
        $this->pavadinimas = $pav;
        $this->antraste = $ant;
        $this->paveiksliukas = $img; 
        $this->tekstas = $txt;
    }

    public function sugeneruoti(){ 
        echo "<h1>" .$this->pavadinimas. "</h1>";
        echo "<img src=" . "\" $this->paveiksliukas\"" . ">";
        echo "<h2>" .$this->antraste. "</h2>";
        echo "<p>" .$this->tekstas. "</p>";
    }
}

class Rubrika extends Straipsnis{
//dukterinė klasė, kuri turi trumpo aprašymo generevimo metoda ir straipsnio rubrikos išvedimo metodą
    var $rubrika;
    var $id;

    function __construct($pav, $ant, $img, $txt, $rub, $id) 
    {
        parent::__construct($pav, $ant, $img, $txt, $rub, $id);
        $this->rubrika = $rub;
        $this->id = $id;
    }

    function surubrika()
    {
        echo "<h1>" .$this->pavadinimas. "</h1>";
        echo "<p><small>" .$this->rubrika. "</small></p>";
        echo "<img src=" . "\" $this->paveiksliukas\"" . ">";
        echo "<h2>" .$this->antraste. "</h2>";
        echo "<p>" .$this->tekstas. "</p>";
    }

    function sugeneruotiTrumpa()
    {
        echo "<section>";
        echo "<h1>" . $this->pavadinimas . "(" . $this->rubrika . ")" . "</h1>";
        echo "<img class=\"mazaspav\" src=" . "\" $this->paveiksliukas\"" . ">";
        echo "<p>"; 
        if (str_word_count($this->antraste, 0) > 10) 
        {
            $words = str_word_count($this->antraste, 2);
            $pos = array_keys($words);
            $this->antraste = substr($this->antraste, 0, $pos[9]) . '...';
            echo $this->antraste;
        }
        echo "</p>";
        echo "<p><a class=\"btn\" href=\"?straipsnis=" . $this->id . "\"role=\"button\">Skaityti plačiau</a></p>";
        echo "</section>";
    }
}
?>