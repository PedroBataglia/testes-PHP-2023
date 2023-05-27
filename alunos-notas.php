<?php

$alunos = ['Pedro', 'Maria', 'Kuau', 'Giulia'];

$notas = [7, 6, 9, 8];

for ($index = 0; $index < count($alunos); $index++) {
    echo "O aluno $alunos[$index] teve nota $notas[$index] na prova!".PHP_EOL;
}
