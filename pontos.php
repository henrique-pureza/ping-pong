<?php
    if ($_POST) {
        $time1 = $_POST["time1"];
        $time2 = $_POST["time2"];
    } else {
        header("Location: /index.php");
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Pontos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    </head>

    <body>

        <main class="container d-flex justify-content-center vh-100 flex-column">

            <div class="row">

                <div class="col text-center">
                    <h1><?php echo $time1; ?></h1>
                </div>

                <div class="col text-center">
                    <h1><?php echo $time2; ?></h1>
                </div>

            </div>

            <div class="row m-0">

                <div class="row m-0">

                    <div class="col d-flex justify-content-center align-items-center">
                        <p style="font-size: 36pt" id="pontos-time1">0</p>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center">
                        <p style="font-size: 72pt" id="games-time1">0</p>
                    </div>

                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <div class="h-100 bg-secondary" style="width: 1px"></div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center">
                        <p style="font-size: 72pt" id="games-time2">0</p>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center">
                        <p style="font-size: 36pt" id="pontos-time2">0</p>
                    </div>

                </div>

            </div>

        </main>

        <script>
            $(document).ready(function() {
                console.log(`
TECLAS DE ATALHO:

A e D => aumentam e diminuem a pontuação da esquerda, respectivamente.
Seta para esquerda e seta para a direita => aumentam e diminuem a pontuação da direita, respectivamente.
                `);

                var pontosTime1 = 0;
                var pontosTime2 = 0;
                var gamesTime1  = 0;
                var gamesTime2  = 0;

                $("#pontos-time1").text(pontosTime1);
                $("#pontos-time2").text(pontosTime2);
                $("#games-time1") .text(gamesTime1);
                $("#games-time2") .text(gamesTime2);

                function aumentarPontos(time) {
                    if (time == "time1") {
                        if (pontosTime1 < 45) {
                            pontosTime1 += 15;
                            $("#pontos-time1").text(pontosTime1);
                        } else if (pontosTime1 == 45) {
                            pontosTime1 = 0;
                            gamesTime1++;
                            $("#pontos-time1").text(pontosTime1);
                            $("#games-time1") .text(gamesTime1);
                        }
                    } else if (time == "time2") {
                        if (pontosTime2 < 45) {
                            pontosTime2 += 15;
                            $("#pontos-time2").text(pontosTime2);
                        } else if (pontosTime2 == 45) {
                            pontosTime2 = 0;
                            gamesTime2++;
                            $("#pontos-time2").text(pontosTime2);
                            $("#games-time2") .text(gamesTime2);
                        }
                    }
                }

                function diminuirPontos(time) {
                    if (time == "time1") {
                        if (gamesTime1 == 0 && pontosTime1 > 0) {
                            pontosTime1 -= 15;
                            $("#pontos-time1").text(pontosTime1);
                        } else if (gamesTime1 > 0) {
                            if (pontosTime1 > 0) {
                                pontosTime1 -= 15;
                                $("#pontos-time1").text(pontosTime1);
                            } else {
                                pontosTime1 = 45;
                                gamesTime1--;
                                $("#pontos-time1").text(pontosTime1);
                                $("#games-time1") .text(gamesTime1);
                            }
                        }
                    } else if (time == "time2") {
                        if (gamesTime2 == 0 && pontosTime2 > 0) {
                            pontosTime2 -= 15;
                            $("#pontos-time2").text(pontosTime2);
                        } else if (gamesTime2 > 0) {
                            if (pontosTime2 > 0) {
                                pontosTime2 -= 15;
                                $("#pontos-time2").text(pontosTime2);
                            } else {
                                pontosTime2 = 45;
                                gamesTime2--;
                                $("#pontos-time2").text(pontosTime2);
                                $("#games-time2") .text(gamesTime2);
                            }
                        }
                    }
                }

                $(document).keydown(function(event) {
                    switch (event.key) {
                        case "ArrowLeft":
                            diminuirPontos("time2");
                            break;
                        case "ArrowRight":
                            aumentarPontos("time2");
                            break;
                        case "a":
                            diminuirPontos("time1");
                            break;
                        case "d":
                            aumentarPontos("time1");
                            break;
                    }
                });
            });
        </script>

    </body>

</html>
