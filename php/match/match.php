<?php
$day=4;
echo match($day){
    1=>'segunda-feira',
    2=>'terça-feira',
    3=>'quarta-feira',
    4=>'quinta-feira',
    5=>'sexta-feira',
    6=>'sabado',
    7=>'domingo',
    default=> 'dia na reconhecido',
};