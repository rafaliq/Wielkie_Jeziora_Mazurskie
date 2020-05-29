<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$projekty = new FieldsBuilder('projekty');

$projekty
    ->setLocation('post_type', '==', 'projekty');

$projekty
    ->addText('project-title', ['label'=>'Tytuł'])
    ->addText('project-desc', ['label'=>'Opis']);
return $projekty;