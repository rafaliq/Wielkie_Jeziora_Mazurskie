<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$team = new FieldsBuilder('team');

$team
    ->addFields(get_field_partial('components.title'))
    ->addRelationship('team', ['label'=>'Zespół', 'post_type'=>"team"]);
return $team;