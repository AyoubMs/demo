<?php


$books = [
    [
        'name' => "Do Androids Dream of Electric Sheep",
        'author' => "Philip K. Dick",
        'releaseYear' => '2021',
        'url' => "http://example.com"
    ],
    [
        'name' => "Project Hail Mary",
        'author' => "Andy Weir",
        'releaseYear' => '2021',
        'url' => "http://example.com"
    ],
    [
        'name' => "The Martian",
        'author' => "Andy Weir",
        'releaseYear' => '2011',
        'url' => "http://example.com"
    ]
];

function filter($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2000;
});

require "index.view.php";