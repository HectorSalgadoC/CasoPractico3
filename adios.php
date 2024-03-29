<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Segundo php</title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            body {
                background-color: #111;
            }

            .title {
                font-family: "Montserrat";
                text-align: center;
                color: #FFF;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                letter-spacing: 1px;
            }

            h1 {
                background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
                background-size: cover;
                color: transparent;
                -moz-background-clip: text;
                -webkit-background-clip: text;
                text-transform: uppercase;
                font-size: 120px;
                line-height: .75;
                margin: 10px 0;
            }
            
            .white-mode {
                text-decoration: none;
                padding: 7px 10px;
                background-color: #122;
                border-radius: 3px;
                color: #FFF;
                transition: .35s ease-in-out;
                position: absolute;
                left: 15px;
                bottom: 15px;
                font-family: "Montserrat";
            }

            .white-mode:hover {
                background-color: #FFF;
                color: #122;
            }

        </style>
    </head>
    <body>
        <div class="title">
            <h1>
                <?php 
                    echo "Hasta luego desarrollador!!!!"             
                ?>
            </h1>
        </div>
    </body>
</html>