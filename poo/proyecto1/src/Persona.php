<?php
    class Persona {
        public static $cont = 0;
        public $nombre;
        public $apellidos;
        protected $edad;
        
        public function __construct() {
            self::$cont++;
            $n = func_num_args();
            switch($n) {
                case 3:
                    $this -> inicio(func_get_args());
                break;

                case 2:
                    $this -> inicio1(func_get_args());
            }
        }
        //......................................................
        public function inicio($arg) {
            $this -> nombre = $arg[0];
            $this -> apellidos = $arg[1];
            $this -> edad = $arg[2];
        }
        public function inicio1($arg) {
            $this -> nombre = $arg[0];
            $this -> apellidos = $arg[1];
        }

        //......................................................
        public function __toString() : String {
            return "<pre>{$this -> apellidos}, {$this -> nombre}, Edad: {$this -> edad}</pre>";
        }
        //.........................................................
        public static function incrementarPersona() {
            self::$cont++;
        }
    }