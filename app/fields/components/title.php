<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$header = new FieldsBuilder('title');

$header
    ->addRadio('header', ['title'=>'Pokaż tytuł sekcji?'])
        ->setInstructions('Pokaż tytuł sekcji.')    
        ->addChoices('nie', 'tak')

    ->addText('title')
        ->setInstructions('Tytuł slidera.')
        ->conditional('header', '==', 'tak');

return $header;