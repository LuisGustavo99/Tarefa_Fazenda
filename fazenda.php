
<?php 


    class Animal {

        public $npatas;
        public $tipoPele;
        public $especie;
        public $cor;
    


    function som(){
        if($this->especie = "cachorro");
        return "auuaauuua";
       
        if($this->especie = "galinha");
        return "popopopo";
        
        if($this->especie = "porco");
        return "ronc,ronc,ronc";
        
        if($this->especie = "vaca");
        return "muuuuuu";

        if($this->especie = "passarinho");
        return "fiu fiu";
       
    }    
    function mov(){
        if($this->especie = "cachorro");
        return "anda no chão";
       
        if($this->especie = "galinha");
        return "anda no chão";
        
        if($this->especie = "porco");
        return "anda no chão";
        
        if($this->especie = "vaca");
        return "anda no chão";

        if($this->especie = "passarinho");
        return "voa";
  
    }
}
    $animal1 = new Animal();
    $animal1->especie = "cachorro";
    $animal1->cor = "preto";
    $animal1->npatas = "4";
    $animal1->tipoPele = "peludo";


    $animal2 = new Animal();
    $animal2->especie = "galinha";
    $animal2->cor = "branca e marrom";
    $animal2->npatas = "2";
    $animal2->tipoPele = "penas";

    $animal3 = new Animal();
    $animal3->especie = "porco";
    $animal3->cor = "rosa";
    $animal3->npatas = "4";
    $animal3->tipoPele = "pele lisa";

    $animal4 = new Animal();
    $animal4->especie = "vaca";
    $animal4->cor = "preta e branca";
    $animal4->npatas = "4";
    $animal4->tipoPele = "peluda";
    
    $animal5 = new Animal();
    $animal5->especie = "passarinho";
    $animal5->cor = "verde";
    $animal5->npatas = "2";
    $animal5->tipoPele = "penas";


    echo "O animal 1 é um" . $animal1->especie . ", tem cor" . $animal1->cor . ", tem" . $animal1-> . " patas, é" . $animal1->tipoPele . ", faz " . $animal1->som() . ", ele " . $animal1->mov() . ".\n";
    echo "O animal 1 é um" . $animal2->especie . ", tem cor" . $animal2->cor . ", tem" . $animal2-> . " patas, é" . $animal2->tipoPele . ", faz " . $animal2->som() . ", ele " . $animal2->mov() . ".\n";
    echo "O animal 1 é um" . $animal3->especie . ", tem cor" . $animal3->cor . ", tem" . $animal3-> . " patas, é" . $animal3->tipoPele . ", faz " . $animal3->som() . ", ele " . $animal3->mov() . ".\n";
    echo "O animal 1 é um" . $animal4->especie . ", tem cor" . $animal4->cor . ", tem" . $animal4-> . " patas, é" . $animal4->tipoPele . ", faz " . $animal4->som() . ", ele " . $animal4->mov() . ".\n";
    echo "O animal 1 é um" . $animal5->especie . ", tem cor" . $animal5->cor . ", tem" . $animal5-> . " patas, é" . $animal5->tipoPele . ", faz " . $animal5->som() . ", ele " . $animal5->mov() . ".\n";
