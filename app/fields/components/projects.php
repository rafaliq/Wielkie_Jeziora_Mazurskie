<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$projects = new FieldsBuilder('projects');

$projects
    ->addText('title', ['label'=> 'Tytuł']);

return $projects;