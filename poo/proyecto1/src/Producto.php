<?php
class Producto
{
    public $codigo;
    protected $nombre;
    private $stock = 0;
    public static $id = 0;

    public function __construct() {
        $num = func_num_args();
        self::$id++;
        switch($num) {
            case 3:
                $this -> codigo = func_get_arg(0);
                $this -> nombre = func_get_arg(1);
                $this -> stock = func_get_arg(2);
        }
    }


    public function setStock($p) {
        if($p < 0) {
            $this -> stock = 0;
        }else {
            $this -> stock = $p;
        }
    }

    

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }



    //...................................................................
    public function __toString(): String {
        return "<p>El código es: {$this->codigo}, el nombre: {$this->nombre}, el stock: {$this->stock}</p>"; 
    }
}
