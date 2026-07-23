<?php 
$status =2;

switch ($status){
    case 0: 
        echo 'voce ta offline';
        break;
        case 1:
            echo 'online mas n conectado';
            break;
            case 2:
                echo 'vc ta online e conectado';
                break;
                case 3: 
                    echo 'vc ta conectado e ativo';
                    break;
                    case 4 :
                        echo 'vc ficou conectado por 3 horas porém fico offline';
                        break;
}
if($status == 0){
    echo 'fique online';
}elseif($status ==1){
    echo 'voce pode trabalhar';
}elseif($status ==2){
    echo 'parebens vc ta conectado';
}
var_dump($status  );