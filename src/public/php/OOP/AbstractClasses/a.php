<?php
require __DIR__ . '/../../../../vendor/autoload.php';

use AbstractClasses\Text;
use AbstractClasses\Radio;
use AbstractClasses\Boolean;
use AbstractClasses\CheckBox;
use AbstractClasses\Field;
use AbstractClasses\Renderable;


    $fields = [
       // new \AbstractClasses\Field('baseFiled'),
        new \AbstractClasses\Text('textFiled'),
       // new \AbstractClasses\Boolean('booleanFiled'),
        new \AbstractClasses\CheckBox('checkBoxFiled'),
        new \AbstractClasses\Radio('radioFiled'),


    ];

    foreach ($fields as $field) {
        echo $field->render() . '<br/>';
    }
