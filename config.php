<?php return array (
  'application' => 
  array (
    'debug' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'mysql' => 
      array (
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'samiscoding',
        'prefix' => 'pksic_',
      ),
    ),
  ),
  'system' => 
  array (
    'secret' => 'QDEmWHsRApFZeJ/6eIew8VADrTHU5KYMhbBLipcfBOpMx7vFBiKze88IhK5m/v2N',
  ),
  'system/cache' => 
  array (
    'caches' => 
    array (
      'cache' => 
      array (
        'storage' => 'auto',
      ),
    ),
    'nocache' => false,
  ),
  'system/finder' => 
  array (
    'storage' => '',
  ),
  'debug' => 
  array (
    'enabled' => false,
  ),
);