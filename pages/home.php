<?php
    require_once('dados/dados.php');
?>
<style>
    .thumbprod {
        width: 200px;
        text-align: center;
        margin: 20px;
    }
    .thumbprod img {
        width: 200px;
        height: 200px;
    }

</style>

<?php
    foreach($produtos as $id => $produto) {
?>
<a href="index.php?page=produto&id=<?php echo $id?>">
    <div class="thumbprod">
        <img src="images/<?php echo $produto['imagem']?>">
        <h2><?php echo $produto['nome']?></h3>
    </div>
</a>
<?php
    }
?>