<?php

namespace ScreenMatch\Calculos;

use Throwable;
use ScreenMatch\Modelo\Avaliavel;

class ConversorNotaEstrela {
    public function converte(Avaliavel $avaliavel): float {

        try{
            $nota = $avaliavel->media();
    
            return round($nota) / 2;
        } catch(Throwable) {
            return 0;
        }

    }
}