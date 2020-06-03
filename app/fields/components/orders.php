<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$orders = new FieldsBuilder('orders');

$orders
    ->addText('title', ['label'=> 'Tytuł']);

return $orders;