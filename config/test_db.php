<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
// $db['dsn'] = 'mysql:host=localhost;dbname=yii2basic_test';
$db['dsn'] = 'sqlsrv:server=DESKTOP-G87BA8R\MYSERVER;database=tempdb';

return $db;
