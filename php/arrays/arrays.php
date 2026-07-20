<?php

$fruta=[
'banana',
'maçã',
'pera',
'uva',
'manga',
122110,
10,
true,
-12
];
$fruta []= 'abacaxi';//acrescentando um novo item
$fruta [0]= 'laranja';//acrescentando um novo item

var_dump($fruta);//é um index numerico 

$lista =[
    'fruta'=>'maçã',
    'comida'=>'biscoito',
    'produto'=>'sabão'

];
$lista ['objeto']= 'colher';
var_dump($lista);

$users =[
    'admin'=> ['arthur', 'teresa'],
    'normal'=>['nina']
];
var_dump($users);

$compras=[
    'legumes'=>[['babata',5.60], ['abobora', 6.78], ['cebola', 2.53]],
    'verduras'=>[['alface', 5.90], ['rucula', 4.6],['couve', 3.45]],
    'carne'=>[['picanha', 98.69],['carne-moida', 15.60]],
    'limpeza'=>[['detergente', 1.38],['desenfetante',9.80]],
    'bebida'=>[['cerveja', 4.59], ['refrigerante', 6.99]],

];
var_dump($compras);