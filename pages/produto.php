<style>
    .img-produto {
        width: 50%;
    }
    .txt-produto {
        width: 50%;
    }
    .img-produto img{
        width: 300px;
        height: 300px;
    }
    .botao {
        text-decoration: none;
        color: white;
        background-color: orange;
        padding: 10px;
        border-radius: 10px;
    }


</style>
<?php
    require_once ('dados/dados.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
?>
    <div class="img-produto">
        <img src="<?php echo $produtos[$id]['imagem']?>" alt="">
    </div>
    <div class="txt-produto">
        <h2><?php echo $produtos[$id]['nome']?></h2>
        <h3><?php echo $produtos[$id]['preco']?></h3>
        <p><?php echo $produtos[$id]['descricao']?></p>
        <BR>
        <a href="index.php?page=contato" class="botao">Comprar</a>
    </div>
<?php
    }else{
?>
        <div><h1>Produto não cadastrado</h1></div>
<?php
    }  
?>



