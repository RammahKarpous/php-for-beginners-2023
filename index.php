<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fot Beginners 2023</title>
</head>
<body>
    <?php
$books = [
    [
        'name'        => 'The Art of Computer Programming, Vol. 2',
        'author'      => 'Author name',
        'releaseYear' => 2021,
        'publishUrl'  => 'https://example.com',
    ],
    [
        'name'        => 'Harry Potter The blood of something secret room',
        'author'      => 'JK Rowling',
        'releaseYear' => 2025,
        'publishUrl'  => 'https://example.com',
    ],
    [
        'name'        => 'This is the third book, Vol. 2',
        'author'      => 'JK Rowling',
        'releaseYear' => 2001,
        'publishUrl'  => 'https://example.com',
    ],
];

$filderedBooks = array_filter( $books, function ( $book ) {
    return $book['author'] === 'JK Rowling';
} );
?>

        <ul>
            <?php foreach ( $filderedBooks as $book ): ?>
                <li><a href="<?= $book['publishUrl'] ?>"><?=$book['name']?></a></li>
            <?php endforeach;?>
        </ul>
</body>
</html>