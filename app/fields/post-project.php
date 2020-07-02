<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$postproject = new FieldsBuilder('post-project', ['title' => 'projekt', 'position' => 'side']);

$postproject
    ->setLocation('post_type', '==', 'post');
  
$postproject
  ->addPostObject('project', ['label'=>'Projekt', 'post_type'=>'projekty', 'field_type'=>'select', 'multiple'=>0, 'allow_null' => 1]);
        
return $postproject;