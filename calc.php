<?php
$v1=$_POST['valor1'];
$v2=$_POST['valor2'];
$vtipo=$_POST['tipo'];

// if $tipo = 'soma'{
//     $res = $v1 + $v2
// }
// if $tipo = 'multi'{
//     $res = $v1 * $v2
// }
// if $tipo = 'div'{
//     $res = $v1 / $v2
// }
// if $tipo = 'sub'{
//     $res = $v1 - $v2
// }

switch ($vtipo) {
case 'soma':
    $res = $v1 + $v2;
        break;
case 'multi':
    $res = $v1 * $v2;
        break;
case 'div':
    if ($v2 > 0 ){
    $res = $v1 / $v2;
    }else{
        $res  = 0;
    }

        break;
case 'sub':
    $res = $v1 - $v2;
        break;
}
echo "A resultado é: ".$res;

?>