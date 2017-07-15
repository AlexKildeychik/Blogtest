<?php


namespace App;


class Config
{
    use \TSingleton;

    public $data = [];

    public function __construct()
    {
        $this->data = require __DIR__ . '/../DbConfig.php';
    }


}