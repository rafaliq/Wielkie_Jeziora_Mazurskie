<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team = new FieldsBuilder('team');

$team
    ->setLocation('post_type', '==', 'team');
  
$team
    ->addText('job', ['label'=>'Stanowisko'])
    ->addText('tel', ['label'=>'Telefon'])
    ->addText('mail', ['label'=>'E-mail'])
    ->addImage('image', ['title'=>'Zdjęcie']);
return $team;