<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Contador de Pontos para PingPong</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    </head>

    <body>

        <header class="navbar bg-light mb-3">
            <nav class="container">
                <span class="navbar-brand">
                    Tênis de Mesa
                </span>
            </nav>
        </header>

        <main class="container">
            <h1>Contador de Pontos</h1>
            <form action="pontos.php" method="post" class="p-3">
                <div class="mb-3">
                    <label for="time1" class="form-label">Time 1</label>
                    <input type="text" placeholder="Time 1" name="time1" id="time1" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="time2" class="form-label">Time 2</label>
                    <input type="text" placeholder="Time 2" name="time2" id="time2" class="form-control" />
                </div>
                <input type="submit" value="Começar" class="btn btn-primary" />
            </form>
        </main>

    </body>

</html>
