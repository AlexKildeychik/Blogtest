<?php
require_once __DIR__ . '/../App/Models/Article.php';

$news = \App\Models\Article::getLastThree();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Rat News</title>
    <style>
        .content {
            border: 1px solid #0975B5;
            padding: 3px 5px 3px 30px;
            margin: 10px;
            text-align: justify;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="content">
    <?php foreach ($news as $text): ?>
    <p><?= $text->text; ?> </p>
<?php endforeach; ?>
</div>
</body>
</html>