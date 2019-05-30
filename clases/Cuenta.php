<?php
require_once '../interfaces/IArray.php';
require_once 'Cliente.php';

abstract class Cuenta implements IArray {
    protected $nroCuenta;
    protected $cliente;
    protected $saldo;
    
    public function __construct(string $nroCuenta, Cliente $cliente, int $saldo){
        $this->nroCuenta = $nroCuenta;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
        
    }
    
    
    public function realizarDeposito(int $monto): bool {
        $this->saldo = $this->saldo + $monto;
        return true;
    }

    public function realizarRetiro(int $monto): bool {
        return false;
    }
    
    public function saldoCuenta(): int {
        return $this->saldo;
    }
     public function getNroCta(){
        return $this->nroCuenta;
    }
     public function getCliente(){
        return $this->cliente->getApellido();
    }
    
    // método interno para serializar la clase a un array
    public function toArray(): array{
        return [
                 'nroCuenta'=>$this->nroCuenta,
                 'cliente'=>$this->cliente->toArray(),
                 'saldo'=>$this->saldo
               ];
    }
    
}

    