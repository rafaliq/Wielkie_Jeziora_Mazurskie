<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$opinions = new FieldsBuilder('opinions');

$opinions
    ->addRepeater('opinions', ['min' => 1, 'layout' => 'table'])
        ->addLink('link', ['title' => 'Link']);
return $blueBox;