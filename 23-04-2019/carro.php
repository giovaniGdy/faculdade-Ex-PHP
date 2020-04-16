<?PHP
    class carro
    {
        //Atributos da Classe Carro
        private $modelo;
        private $velocidade;
        
        //Métodos       //carro()
        public function __construct()
        {
            $this->modelo = '';
            $this->velocidade = 0;
        }
        //Todas as functions GET precisam de um RETURN
        public function getModelo()
        {
            return $this->modelo;
        }
        //Todas as functions SET precisam de um valor como parâmetro
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }
        
        //Todas as functions GET precisam de um RETURN
        public function getVelocidade()
        {
            return $this->velocidade;
        }
        //Todas as functions SET precisam de um valor como parâmetro
        public function setVelocidade($velocidade)
        {
            $this->velocidade = $velocidade;
        }
        
        public function acelerar()
        {
            if($this->modelo == "ferrari") {
                $this->velocidade = $this->velocidade + 100;
            }elseif ($this->modelo == "lamborghini") {
                $this->velocidade = $this->velocidade + 115;
            }elseif ($this->modelo == "fusca") {
                $this->velocidade = $this->velocidade + 8;
            }elseif ($this->modelo == "porsche") {
                $this->velocidade = $this->velocidade + 120;
            }elseif ($this->modelo == "f1") {
                $this->velocidade = $this->velocidade + 280;
            }elseif ($this->modelo == "BMW") {
                $this->velocidade = $this->velocidade + 80;
            }elseif ($this->modelo == "audi") {
                $this->velocidade = $this->velocidade + 115;
            }elseif ($this->modelo == "bugatti") {
                $this->velocidade = $this->velocidade + 110;
            }elseif ($this->modelo == "cadillac") {
                $this->velocidade = $this->velocidade + 115;
            }else{
                 $this->velocidade = $this->velocidade + 10;
            }
           
        }
        
        public function frear()
        {
            if($this->modelo == "ferrari") {
                $this->velocidade = $this->velocidade - 100;
            }elseif ($this->modelo == "lamborghini") {
                $this->velocidade = $this->velocidade - 115;
            }elseif ($this->modelo == "fusca") {
                $this->velocidade = $this->velocidade - 8;
            }elseif ($this->modelo == "porsche") {
                $this->velocidade = $this->velocidade - 120;
            }elseif ($this->modelo == "f1") {
                $this->velocidade = $this->velocidade - 280;
            }elseif ($this->modelo == "BMW") {
                $this->velocidade = $this->velocidade - 80;
            }elseif ($this->modelo == "audi") {
                $this->velocidade = $this->velocidade - 115;
            }elseif ($this->modelo == "bugatti") {
                $this->velocidade = $this->velocidade - 110;
            }elseif ($this->modelo == "cadillac") {
                $this->velocidade = $this->velocidade - 115;
            }else{
                 $this->velocidade = $this->velocidade - 10;
            }
        }
        
    }
?>