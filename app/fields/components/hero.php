<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('Hero');

$hero
    ->addImage('image')
        ->setInstructions('Wybierz zdjęcie w tle')
    ->addFile('film')
    ->addText('title', ['label'=> 'Własny tytuł'])
    ->addTrueFalse('box', ['label' => 'wyświetlić box', 'wrapper' => ['width' => '20%']])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
        ->conditional('box', '==', '1')
    ->addLink('link')
        ->conditional('box', '==', '1');

return $hero;