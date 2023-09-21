<?php if(!empty($_POST)):?>
<?php
include_once('templates/header.php');
include_once('dados/dados.php');
?>


<main class='mainvideo'>

<a href="<?php echo $BASE_URL?>materia.php?materia=<?php echo $_GET['materia']?>"> <button class="voltar">Voltar</button></a>

    <div class="video">
        <?php  echo $_POST['video'];?>
    </div>
</main>

<?php
include_once('templates/footer.php');
endif
?>