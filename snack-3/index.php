<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Enrico Olivieri',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Matteo Pace',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Marco Rossi',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Giovanni Guerra',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Antonio Potè',
            'text' => 'Testo post 6'
        ]
    ],
];

foreach ($posts as $data => $data_value) {
    echo "<h3>" . $data . "</h3>";
    foreach ($data_value as $x => $val){
        echo "<p>" . $val['title'] . "<br>" . $val['text'] . "<br>" . " Autore: " . $val['author'] . "<br></p>";
    }
}


?>