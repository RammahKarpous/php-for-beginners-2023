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

require 'index.view.php';