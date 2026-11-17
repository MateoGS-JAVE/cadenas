<?php

function contarCaracteres($cadena) {
    return strlen($cadena);
}

function convertirMayusculas($cadena) {
    return strtoupper($cadena);
}

function convertirMinusculas($cadena) {
    return strtolower($cadena);
}

function invertirCadena($cadena) {
    return strrev($cadena);
}

function esPalindromo($cadena) {
    $limpia = strtolower(str_replace(' ', '', $cadena));
    return $limpia === strrev($limpia);
}

function contarVocales($cadena) {
    preg_match_all('/[aeiouáéíóúü]/i', $cadena, $coincidencias);
    return count($coincidencias[0]);
}

?>