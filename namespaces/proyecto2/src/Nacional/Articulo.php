<?php
namespace Src\Nacional;

class Articulo {
    public $nombre;
    public function decirNamespace() {
        echo "<p>" .__NAMESPACE__. "</p>";
    }
}