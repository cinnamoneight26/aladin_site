<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysql',
    'db_port' => '3306',
    'db_hostname' => 'localhost',
    'db_userid' => 'auguster',
    'db_password' => 'jude4423',
    'db_database' => 'auguster',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysql',
      'db_port' => '3306',
      'db_hostname' => 'localhost',
      'db_userid' => 'auguster',
      'db_password' => 'jude4423',
      'db_database' => 'auguster',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://auguster.dothome.co.kr/aladin/news/',
  'lang_type' => 'ko',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
);