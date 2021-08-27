<?php
    require_once('dados/dados.php');
?>
<?php
    foreach($produtos as $id => $produto) {
?>
<a href="index.php?page=produto&id=<?php echo $id?>">
    <div class="thumbprod">
        <img src="<?php echo $produto['imagem']?>">
        <h2><?php echo $produto['nome']?></h3>
    </div>
</a>
<?php
    }
?>