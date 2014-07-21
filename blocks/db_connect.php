<?php

$url = explode('.', $_SERVER['HTTP_HOST']);
define('TLD', end($url));

switch (TLD) {

    case 'robbert':
        $c = array(
            'host'  => 'localhost',
            'user'  => 'root',
            'pass'  => '',
            'db'    => 'sphereindu_articles',
        );
        break;

    case 'robert':
        $c = array(
            'host'  => 'localhost',
            'user'  => 'sphereindu_query',
            'pass'  => 'southpark',
            'db'    => 'sphereindu_articles'
        );
        break;

    default:
        $c = array(
            'host'  => 'localhost',
            'user'  => 'sphereindu_query',
            'pass'  => 'southpark',
            'db'    => 'sphereindu_articles'
        );

}

$connect = mysql_connect($c['host'], $c['user'], $c['pass']) or die(mysql_error());

mysql_select_db($c['db'], $connect);