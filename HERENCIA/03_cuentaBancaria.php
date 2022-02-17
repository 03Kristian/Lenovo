<?php
    require_once("01_cliente.php");
    
    class cuentaBancaria extends Cliente{
    
        private $codigo;
        protected $tipo_cuenta;
        private $saldo;
        private $retiro;

        function __construct(int $vrcedula,string $vrnombre,float $vrsalario, string $vremail, string $vrpassword, $vrcodigo, $vrtipo_cuenta, $vrsaldo)
        {
            parent::__construct($vrcedula, $vrnombre, $vrsalario);
            $this->codigo = $vrcodigo;
            $this->saldo = $vrsaldo;
        }
        public function getsaldo(){
            return $this->saldo; 
        }
        public function setsaldo($vrsaldo){
            return $this->saldo= $vrsaldo;
        }

    }
?>