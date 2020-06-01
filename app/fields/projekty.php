<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$projekty = new FieldsBuilder('projekty');

$projekty
    ->setLocation('post_type', '==', 'projekty');

$projekty
    ->addGroup('project-info', ['min' => 0, 'label' => 'Informacje o projekcie'])
        ->addText('p1', ['label'=>'Wartość projektu', 'wrapper' => ['width' => '33%']])
        ->addText('p2', ['label'=>'Wartość dofinansowania', 'wrapper' => ['width' => '33%']])
        ->addText('p3', ['label'=>'Beneficjent', 'wrapper' => ['width' => '33%']])
        ->addText('p4', ['label'=>'Partnerzy', 'wrapper' => ['width' => '33%']])
        ->addText('p5', ['label'=>'Czas trwania', 'wrapper' => ['width' => '33%']])
        ->addText('p6', ['label'=>'Źródło finansowania', 'wrapper' => ['width' => '33%']]);

return $projekty;