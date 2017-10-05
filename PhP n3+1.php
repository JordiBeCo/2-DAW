<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Exemple de formulari</title>

</head>

<body>

<div style="margin: 30px 10%;">
<h3>Números primers</h3>
<?php

    /* ----- Comprovem que han introduit algun caracter -----*/

    if (!array_key_exists("numero", $_REQUEST) ) {
        die( "No he rebut el número" );
    }

    $numero_txt = $_REQUEST["numero"];

    /* ----- COMPROVEM QUE EL QUE HAN INTRODUIT SIGUI UN NUMERO -----*/
    if (!is_numeric($numero_txt) ) {
        die( "Cal entrar un número, '$u' no és un número.");
    }

    $n = intval( $numero_txt );
    /* ----- COMPROVEM QUE EL NUMERO ES MAJOR A 1 -----*/
    if ($n <=1 ) {
        die("Cal posar un número superior a 1");
    }
    
    /* ----- INICIEM VARIABLES QUE NECESSITAREM EN EL FUTUR -----*/
    $maxNum=0;
    $n3 = array();
    $contador =0;
    
    
    //BUSQUEM ELS DIVISORS I ES POSEM DIS DE L'ARRAY
    do {    
        $es_divisor = ($n%2==0);
        
            if($es_divisor){
                $n = ($n/2);
                $n3[] = $n;
                   
            } else {
                $n = ($n*3)+1;
                $n3[]=$n;
                
            }
        $contador ++;
        
        
    //Comprovem si el numero és mes gran que el numMax despres de cada iteració.
        if($n > $maxNum){$maxNum=$n;}
        
    } while ($n != 1);
   //PINTEM EL RESULTAT
    
    echo("La sequencia del $numero_txt és {");
    foreach ($n3 as $value) {
        echo("$value ,");
    }
    echo("} despres de $contador iteracions i arribant a un màxim de $maxNum.")
?>
</div>
</body>
</html>
