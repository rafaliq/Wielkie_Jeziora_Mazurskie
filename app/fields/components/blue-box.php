<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$blueBox = new FieldsBuilder('blueBox');

$blueBox
    ->addRepeater('Linki', ['min' => 1, 'layout' => 'table'])
        ->addLink('link', ['title' => 'Link']);
return $blueBox;