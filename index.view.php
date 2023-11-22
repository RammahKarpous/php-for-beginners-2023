<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fot Beginners 2023</title>
</head>
<body>
        <ul>
            <?php foreach ( $filderedBooks as $book ): ?>
                <li><a href="<?= $book['publishUrl'] ?>"><?=$book['name']?></a></li>
            <?php endforeach;?>
        </ul>
</body>
</html>
