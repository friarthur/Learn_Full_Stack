<?php
$user = 'clt';
$rh = 'plususer';
$admin = 'masteruser';

$empresa= 'clt';

switch($empresa){
    case $user:
        echo 'vc só pode mexer no sistema, vc tem poucos acessos';
        break;
        case $rh:
            echo 'você pode alterar, excluir e adicionar clt';
            break;
            case $admin:
                echo 'vc é dono';
                break;

                default:
                echo 'vc é apenas um visitante';
            
}
var_dump($empresa);