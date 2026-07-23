<?php
$produto= 5;

echo match($produto){
1=>'sorvete',
2=>'sorvete de chocolate',
3=>'sorvete de laranja',
4=>'sorvete de limao',
5=>'sorvete de baunilha',
default => ' não tem esse tipo de produto aqui'
};