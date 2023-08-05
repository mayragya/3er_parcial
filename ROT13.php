<?php
#Encriptación ROT13
#Consiste en que las letras se recorren 13 lugares, por ejemplo en la palabra hola, quedaría: 
#udyn, ya que si recorremos la letra h 13 lugares queda en la letra u.
function rot_13char($char){
    //$char -> es nuestro mensaje
    //para encriptar necesitamos comparar mayúsculas con minúsculas [A,B,C....Z] 
    $upperCase = range ('A', 'Z');
    $lowerCase= range ('a', 'z');
    //26 carácteres porque no se usa la Ñ
    if(in_array ( $char, $upperCase)){
    //array_search busca una posición en específico equivalente, dentro de un arreglo.  
    $index = (array_search ($char, $upperCase) + 13)%26;
    return $upperCase [$index];

         } else if(in_array($char, $lowerCase)){
        $index = (array_search ($char, $lowerCase) + 13)%26;
        return $lowerCase[$index];
        }else{
            return $char;
        }
    }

function rot13($message){
    //message es nuestro mensaje completo 
    $encrypt= ""; 
    //saber cuántos carácteres tiene el mensaje
    #string length
    $longitud = strlen($message);
    //hola -> 4
    for($i=0; $i < $longitud; $i++){
        $char = $message[$i];
        $encrypt .= rot_13char($char); //con .= se concatena texto 
     }
     return $encrypt;
}
$myMessage= "quiero un chocolate abuelita calientito";
$encryptMessage = rot13($myMessage);
echo $encryptMessage;
//MAYRA GUADALUPE YEPEZ AGUILAR TIS 3A
function decrypt($char){
    $upperCase = range ('A', 'Z');
    $lowerCase= range ('a', 'z');
    if(in_array ( $char, $upperCase)){
    $index = (array_search ($char, $upperCase) -13 +26)%26;
    return $upperCase [$index];
    } else if(in_array($char, $lowerCase)){
        $index = (array_search ($char, $lowerCase) -13 +26)%26;
        return $lowerCase[$index];
        }else{
            return $char;
        }
    }

    function desrot13($message){
        $decrypt = ""; 
        $longitud = strlen($message);
        for($i=0; $i < $longitud; $i++){
            $char = $message [$i];
            $decrypt.= decrypt($char); 
         }
         return $decrypt;
    }

    $decryptMessage = desrot13($encryptMessage);
    echo $decryptMessage;
//encrypy_&_decrypt_ROT13_612210400

?>