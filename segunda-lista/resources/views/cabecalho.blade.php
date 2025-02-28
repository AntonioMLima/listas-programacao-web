<?php
function getPaginationLink($exerciseNumber) {
    return "ex{$exerciseNumber}";
}

$url = $_SERVER['REQUEST_URI'];
$totalExercicios = 10;
if (strlen($url) > 5) {
    $exercicioAtual = intval(substr($url, 9));

} else {
    $exercicioAtual = intval(substr($url, 3));
}

echo $exercicioAtual;


?>

<div class="container mt-5">

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
                <li class="page-item <?= $exercicioAtual == 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="<?= getPaginationLink($exercicioAtual - 1) ?>">Anterior</a>
                </li>
            
                <?php for ($i = 1; $i <= $totalExercicios; $i++): ?>
                    <li class="page-item <?= $i == intval($exercicioAtual) ? 'active' : ''; ?>">
                        <a class="page-link" href="<?= getPaginationLink($i) ?>">Exercicio <?=$i ?></a>
                    </li>
                    
                <?php endfor; ?>


            <li class="page-item <?= $exercicioAtual == $totalExercicios ? 'disabled' : '' ?>">
                    <a class="page-link" href="<?= getPaginationLink($exercicioAtual + 1) ?>">Próximo</a>
            </li>
            </ul>
        </nav>
</div>