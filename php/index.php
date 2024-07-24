<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Votez pour votre préférence</h1>
        <form action="vote.php" method="post" class="mt-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vote" value="monogamie" id="monogamie">
                <label class="form-check-label" for="monogamie">
                    Monogamie
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vote" value="polygamie" id="polygamie">
                <label class="form-check-label" for="polygamie">
                    Polygamie
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Votez</button>
        </form>
    </div>
</body>
</html>
