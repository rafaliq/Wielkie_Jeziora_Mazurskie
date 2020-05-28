<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$content = new FieldsBuilder('content');

$content
    ->addFields(get_field_partial('components.title'))

    ->addWysiwyg('content', ['label' => 'Label']);
return $content;