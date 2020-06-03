<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$news = new FieldsBuilder('news');

$news
    ->addText('title', ['label'=> 'Tytuł']);

return $news;