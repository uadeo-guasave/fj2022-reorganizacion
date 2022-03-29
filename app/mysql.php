<?php
use \Mysqli;

class Mysql extends \Mysqli {
    protected $data = [
        'host' => '127.0.0.1',
        'user' => 'root',
        'passwd' => '',
        'dbname' => 'uadeo',
        'port' => 3306
    ];
}