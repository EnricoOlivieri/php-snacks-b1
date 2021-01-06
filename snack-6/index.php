<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<div style="background-color: grey; width: 200px; margin: 20px; padding: 20px;">
    <h3 style="text-align: center;">TEACHERS</h3>
    <ul>
        <?php 
            foreach ($db as $x => $value){
        ?>
        <li>
            <?php
                    echo $value[0]['name'] . " " . $value[0]['lastname'];     
                };
            ?>
        </li>
    </ul>
</div>

<div style="background-color: green; width: 200px; margin: 20px; padding: 20px;">
    <h3 style="text-align: center;">PM</h3>
    <ul>
        <?php 
            foreach ($db as $x => $value){
        ?>
        <li>
            <?php
                    echo $value[1]['name'] . " " . $value[1]['lastname'];     
                };
            ?>
        </li>
    </ul>
</div>