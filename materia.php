<?php
include_once('templates/header.php');
include_once('dados/dados.php');
include_once('assistir.php');


if($_GET['materia'] == 'matematica'){
    $materia = $matematica;
} else if($_GET['materia'] == 'redacao'){
    $materia = $redacao;
} 

$i = 1;
?>

<a href="<?php echo $BASE_URL?>"> <button class="voltar">Voltar</button></a>

<main class="materias">

    <?php foreach ($materia as $item => $conteudo):
        ?>
        <div>
        <h2 class='section'><?php echo $item?></h2>
        <div class="assunto">
           
            <?php foreach ($conteudo as $newitem): ?>

                <p class='numero'> <?php echo $i?></p>
                <?php $i++?>
                <div class='vermateria'>
                    <div class='nomedoassunto'><h3><?php echo $newitem[0] ?></h3></div>

                        <form action="assistir.php?materia=<?php echo $_GET['materia']?>" method="post">
                            <input type="hidden" name="video" value='<?php echo $newitem[1] ?>'>
                            <button type='submit'>Ver aula</button>
                        </form>
                    
                    
                </div>
            <?php endforeach; ?>
            <?php $i=1;?>
        </div>
        </div
    <?php endforeach; ?>
</main>

<?php
include_once('templates/footer.php');
?>