<?php
/*SHA256, MD5-> unidireccional
AES-256-CBC -> bidireccional
AES-256|| CBC (bloque de cadenas encriptadas || cipher block chaining)*/ 
function encriptarTexto( $texto, $key, $iv){
    $cipher = "AES-256-CBC";
    $opciones = OPENSSL_RAW_DATA;
    $encriptado = openssl_encrypt($texto, $cipher, $key, $opciones, $iv);
    return base64_encode ($encriptado);
}
function desencriptarTexto($textoEncriptado, $key, $iv){
    $cipher = "AES-256-CBC";
    $opciones = OPENSSL_RAW_DATA;
    $encriptado = openssl_decrypt(
        base64_decode(textoEncriptado), 
        $cipher, 
        $key, 
        $opciones, 
        $iv);
        return $decrypt;
    }
        $key= "MayraGuadalupeYepezAguilar200504"; //debe de ser una clave  secreta de 32 carácteres, tipo text y difícil de quebrar
        $iv= random_bytes (16);
        $data = "Hellooo world";
        $encrypt_data = encriptarTexto( $texto, $key, $iv);
        $decrypt_data = desencriptarTexto($textoEncriptado, $key, $iv);
        echo ' $encrypt_data';
        echo '$decrypt_data';

    
    
?>