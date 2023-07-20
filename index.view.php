<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    </style>
</head>
<body>

    <h1>Recommended Books</h1>



    <ul>
        <?php foreach($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name'] ?> <?= $book['releaseYear'] ?> - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>