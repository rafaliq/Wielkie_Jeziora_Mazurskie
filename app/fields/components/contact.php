<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$contact = new FieldsBuilder('contact');

$contact
    ->addFields(get_field_partial('components.title'))

    ->addText('adres') 

    ->addText('telefon')

    ->addText('mail');

return $contact;