<?php

$class = [
    [
        'name' => 'Enrico',
        'lastname' => 'Olivieri',
        'votes' => []
    ],
    [
        'name' => 'Matteo',
        'lastname' => 'Rossi',
        'votes' => []
    ],
    [
        'name' => 'Gianni',
        'lastname' => 'Neri',
        'votes' => []
    ]
];

foreach ($class as $student => $value){

    array_push($value['votes'], rand(2, 10), rand(2, 10), rand(2, 10));

    $average = round(array_sum($value['votes'])/count($value['votes']));
    
    echo 
        "<h3>Student " . ++$student . "</h3>" .
        "<ul>
            <li>Nome: " . $value['name'] . "</li>
            <li>Cognome: " . $value['lastname'] . "</li>
            <li>Media Voti: " . $average . "</li>
        </ul>"
    ;
};


?>