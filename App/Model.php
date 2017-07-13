<?php


namespace App;
require_once __DIR__. '/db.php';

abstract class Model
{
    const TABLE = null;
    public $id;
    public static function findAll()
    {
        $db = new db();
            $sql = 'SELECT * FROM ' . static::TABLE;
            return $db->query($sql, static::class);
    }
    public static function findById($id)
    {
        $db = new db();
        $sql= 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        return $db->query($sql, static::class, [':id' => $id])[0];
    }
    public static function getLastThree()
    {
        $db = new db();
        $sql ='SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class, []);
    }
}