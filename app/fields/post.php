<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('post');

$post
    ->setLocation('post_type', '==', 'post')
        ->or('page_template', '==', 'views/page-content.blade.php')
        ->or('post_type', '==', 'oferty_inwestycyjne')
        ->or('post_type', '==', 'partnerzy');
  
$post
    ->addTab('header', ['placement' => 'left'])
        ->addGroup('hero')
            ->addFields(get_field_partial('components.hero'))
        ->endGroup('hero')
    ->addTab('sidebar', ['placement' => 'left'])
        ->addTrueFalse('show_sidebar', ['label'=> 'Pokazać boczny panel', 'default_value'=>'1'])
        ->addRelationship('author', ['label'=> 'Autor', 'post_type'=>'team'])
            ->conditional('show_sidebar', '==', '1')     
        ->addImage('sidebar_image', ['label'=> 'Zdjęcie'])
            ->conditional('show_sidebar', '==', '1');
        
return $post;