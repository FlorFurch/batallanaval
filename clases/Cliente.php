<?php
require_once 'Persona.php';
require_once '../interfaces/IArray.php';

class Cliente extends Persona {
    
    protected $nroCliente;
    
    public function __construct(string $dni, string $nombre, string $apellido, string $nroCliente) {
        parent::__construct($dni, $nombre, $apellido);
        $this->nroCliente = $nroCliente;
    }
    
    public function getDni(): string {
        return $this->dni;
    }
    
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getApellido(): string {
        return $this->apellido;
    }
    
    public function getNroCliente(): string {
        return $this->nroCliente;
    }
    
    // método interno para serializar la clase a un array
    public function toArray(): array {
        return [
                  'dni'=>$this->dni,
                  'nombre'=>$this->nombre,
                  'apellido'=>$this->apellido,
                  'nroCliente'=>$this->nroCliente
               ];
    }
    
    
}