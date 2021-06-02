<?php 

# Verifies si $_POSt est en array
function checkInput($var) {
  if(is_array($var)) {
    # si $var est en array, cette function sera utilisé chaque valeur
    return array_map('checkInput', $var);
  } else {
    # Null bytes
    if(preg_match('/\0/', $var)) {
      die('Valuer incorrect');
    }
    # Encode 
    if(!mb_check_encoding($var,'UTF-8')){
      die('Valuer incorrect');
    }
    return $var;
  }
}

# Escaping 
function h($var){
  if(is_array($var)){
    return array_map('h', $var);
  } else {
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
  }
}

?>