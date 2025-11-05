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
            <h1>Log in</h1>
            <form action="auth.php" method="post">
                <fieldset>
                    <input name="email" placeholder="Email" aria-label="Email" autocomplete="email" required />
                    <input type="password" name="password" placeholder="Password" aria-label="Password"
                        autocomplete="current-password" required />
                    <input type="submit" value="Log in" />
                </fieldset>
            </form>
        </article>
    </main>
</body>

</html>