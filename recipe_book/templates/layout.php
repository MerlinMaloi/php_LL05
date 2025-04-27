<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Recipe Book' ?></title>
</head>
<body>
    <header>
        <h1><a href="/public/index.php">Recipe Book</a></h1>
        <hr>
    </header>

    <main>
        <?= $content ?? '' ?>
    </main>
</body>
</html>
