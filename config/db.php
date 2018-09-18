<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=imooc_shop',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix'=>'shop_',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
