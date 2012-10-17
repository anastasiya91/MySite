<?php

/*
 * @author Mihail Markitan 
 * @email markitanm@gmail.com
 */
if($_SERVER['REMOTE_ADDR']=='127.0.0.1')
 return  array(
            'connectionString' => 'mysql:host=localhost;dbname=db_mysite',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'k308o2p',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
            'enableProfiling' => true,
            'schemaCachingDuration'=>3600,
        //'enableParamLogging'=>true
        );
 else     return array(
            'connectionString' => 'mysql:host=localhost;dbname=db_mysite',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'k308o2p',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
            //'enableProfiling' => true,
            //'enableParamLogging'=>true
        );      
?>
