<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textImg = new FieldsBuilder('textImg');

$textImg
    ->addRadio('pozycja', ['label' => 'Z której strony zdjęcie?',  'wrapper' => ['width' => '20%']])
        ->addChoices('lewo', 'prawo')
    ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']])
    ->addText('title', ['label' => 'Tytuł'])
    ->addText('suptitle', ['label' => 'Suptytuł'])
    ->addWysiwyg('content', ['label' => 'Treść', 'media_upload' => 0])
    ->addText('button', ['label' => 'Treść przycisku'])
    ->addPageLink('button_link', ['label' => 'Odnośnik']);
return $textImg;