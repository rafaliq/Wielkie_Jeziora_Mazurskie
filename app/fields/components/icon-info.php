<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$IconInfo = new FieldsBuilder('iconInfo');

$IconInfo
    ->addFields(get_field_partial('components.title'))
    ->addRadio('background-type', ['title'=>'Typ tła','min' => 0, 'wrapper' => ['width' => '50%']])
        ->addChoices('light', 'dark', 'special', 'obrazek')
    ->addImage('background', ['title'=>'Obrazek na tło'])
        ->conditional('background-type', '==', 'obrazek')
    ->addNumber('ilosc', ['title'=>'Ilość kolumn','min' => 1, 'max' => 5])
        ->setInstructions('Wybierz ilość kolumn od 1 do 5')
    ->addRepeater('icons', ['min' => 0, 'layout' => 'table'])
        ->addText('fa', ['title' => 'Font awesome kod ikonki'])
        ->addImage('ikonka', ['title'=>'Własna ikonka'])
        ->addText('title', ['title' => 'Tytuł'])
        ->addRepeater('list', ['min' => 0,'title' => 'Lista'])
            ->addText('title', ['title' => 'Tytuł']);
return $IconInfo;