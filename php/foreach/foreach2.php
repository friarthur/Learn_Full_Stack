<?php
declare(strict_types=1);

$users=[
    'id1' => [
        'name' => 'João',
        'age'=> 25
    ],
    'id2' => [
        'name' => 'Clara',
        'age'=> 26
    ],
    'id3' => [
        'name' => 'Teresa',
        'age'=> 17
    ],
];
//para cada 
foreach ($users as $key=>$user){
    echo "exibindo o usuario {$user['name']} que possui o valor {$user ['age']} anos com a key $key ". PHP_EOL;
};
