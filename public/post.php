<?php
$post = [
    "id" => "0",
    "title" => "Something interesting, idk",
    "body" => "Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk...",
    "author" => [
        "id" => "idk",
        "name" => "Francisco Mesa",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinionity</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css">
</head>

<body>
    <main class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <article style="padding: 2rem;">
            <h1><?php echo $post["title"] ?></h1>
            <p><?php echo $post["body"] ?></p>
        </article>
    </main>
</body>

</html>