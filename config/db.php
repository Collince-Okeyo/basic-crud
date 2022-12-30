<?php

return [
    /* 'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8', */

    'class' => 'yii\db\Connection',
        'dsn' =>'sqlsrv:server=DESKTOP-G87BA8R\MYSERVER;database=tempdb',//'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'sa',
            'password' => 'Collince@2020',
            'charset' => 'utf8',

     /* 'components' => [
        'db_' => [
            'class' => 'yii\db\Connection',
            'dsn' =>'sqlsrv:server=DESKTOP-G87BA8R\MYSERVER;database=tempdb',//'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'sa',
            'password' => 'Collince@2020',
            'charset' => 'utf8',
        ]
     ], */

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
