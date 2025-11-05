<?php
$userId = "idk";
$fakePosts = [
    [
        "id" => "0",
        "title" => "Something interesting, idk",
        "body" => "Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk, Idk...",
        "author" => [
            "id" => "idk",
            "name" => "Francisco Mesa",
        ]
    ],
    [
        "id" => "1",
        "title" => "Another Post Title",
        "body" => "",
        "author" => [
            "id" => "1",
            "name" => "Jane Doe",
        ]
    ],
    [
        "id" => "2",
        "title" => "A Third Opinion",
        "body" => "",
        "author" => [
            "id" => "2",
            "name" => "John Smith",
        ]
    ],
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
            <h1>Welcome</h1>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($fakePosts as $post) {
                        $isTheOwner = $post["author"]["id"] == $userId;
                        $actions = $isTheOwner ? "<a>Edit</a>" : "";
                        $onClick = "window.location.href='post.php?id=" . $post['id'] . "'";
                        echo "<tr key={$post['id']} onclick={$onClick}>
                        <td>{$post['title']}</td>
                        <td>{$post['author']['name']}</td>
                        <td>" . $actions . "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </article>
    </main>
</body>

</html>