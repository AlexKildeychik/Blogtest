<?php


namespace App\Models;
use App\Model;
require_once __DIR__ . '/../Model.php';

class Article extends Model
{
    const TABLE = 'news';
    public $title;
    public $text;
    public static function articleOne()
    {
        $article = Article::findById($_GET['id']);
        return $article;
    }
}