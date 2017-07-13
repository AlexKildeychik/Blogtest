<?php
require_once __DIR__ . '/App/Models/Article.php';
$article = \App\Models\Article::articleOne();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if($article): ?>
<h1><?= $article->title ?></h1>
<p><?= $article->text ?></p>
<?php else: ?>
<h1>404 (</h1>
<?php endif; ?>
<p><a href="/">На Главную</a></p>
</body>
</html>
