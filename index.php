<?php
include_once('templates/header.php');
?>

<main >

<div class='index'>
    <div class="materia">
        <div class="materianame">
            <h2>Matemática</h2>
        </div>
        <div class="desc">
            <p>Domine a matemática do ENEM de forma simples e gratuita. Prepare-se para o sucesso na prova com a nossa seleção de video aulas.</p>
            <a href="<?=$BASE_URL?>materia.php?materia=matematica"><button>Ver Curso</button></a>
        </div>
    </div>
    
    <div class="materia">
        <div class="materianame">
            <h2>Redação</h2>
        </div>
        <div class="desc">
            <p>Domine a Redação do ENEM de forma simples e gratuita. Prepare-se para o sucesso na prova com a nossa seleção de video aulas.</p>
            <a href="<?=$BASE_URL?>materia.php?materia=redacao"><button>Ver Curso</button></a>
        </div>
    </div>
</div>
</main>

<?php
include_once('templates/footer.php');
?>