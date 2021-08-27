<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Churro - Loja Online</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <img src="images/logo.png" class="logo">
    </header>
    <nav>
        <ul>
            <li><a href="index.php"> Home </a></li>
            <li><a href="index.php?page=quemsomos"> Quem somos </a></li>
            <li><a href="index.php?page=pedidos"> Contato </a></li>
            <li><a href="index.php?page=localizacao"> Localização </a></li>
        </ul>
    </nav>
    <div class="corpo">
        <div class="produtos">
            <?php
                $page = "home";
                if (isset($_GET['page'])){
                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }
                include("pages/$page.php");
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