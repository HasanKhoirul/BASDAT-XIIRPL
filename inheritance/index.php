<?php
// Pewarisan atau Inheritance

// Class induk
class komputer {
    // Property
    public $merk;
    public $prosesor;
    public $memory;

    // fungsi / Operasi membuat beli komputer
    public function beli_komputer(){
        return "Beli Komputer Baru";
    }
}

// Kelas Turunan / Extends dari Class Computer ke Class Laptop

class laptop extends komputer{
    public function lihat_spek(){
        return "merk: $this->merk, 
        prosesor: $this->prosesor,
        memory: $this->memory";
    }
}

// instansiasi Class

?>