<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Churro - Loja Online</title>

    <style>
        body {
            margin: 0;
            font-family: 'Verdana';
        }
        header {
            height: 100px;
            background-color: blue;
            text-align: center;
            padding: 10px;
        }
        
        .logo {
            height: 80px;
        }

        nav {
            background-color: lightblue;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 0px;
            padding: 0;
        }

        nav ul li {
            padding-left: 20px;
            padding-right: 20px;            
            padding-top: 12px;
            padding-bottom: 12px;

        }

        .corpo {
            min-height: 600px;
        }

        .produtos {
            padding-top: 15px;
            max-width: 800px;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
        }

        footer {
            background-color: blue;
            min-height: 50px;
            padding: 10px;

        }
        </style>
</head>
<body>
    <header>
        <img src="images/logo.jpg" class="logo">
    </header>
    <nav>
        <ul>
            <li> Home </li>
            <li> Quem somos </li>
            <li> Contato </li>
            <li> Localização </li>
        </ul>
    </nav>
    <div class="corpo">
        <div class="produtos">
            <?php
                include('pages/home.php');
            ?>
        </div>
    </div>    
    <footer>
        Eduardo Ribeiro Bubols<BR>
        RA 20006619-5<BR>
        Curso de Sistemas para Internet
    </footer>  
</body>
</html>