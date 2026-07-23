<?php
$empresa =[
'funcionarios'=>['clt' ,'estagiario ', 'jovem aprendiz', 
'temporario','financeiro', 'rh', 
'gerente','CEO', 'socio', 'diretor'],

];

foreach($empresa['cargo']){
  switch ($empresa ){
    case 'CEO':
        echo 'Bom vc basicamente manda em tudo pq vc é' . $empresa['cargo'];
  }
}
var_dump($empresa == 'CEO');
