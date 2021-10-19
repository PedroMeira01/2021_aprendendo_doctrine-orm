<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . "/../vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList  */

$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()} - Nome: {$aluno->getNome()}\n\n";
}

$aluno = $alunoRepository->find(2);
echo $aluno->getNome();

echo 'Buscando com WHERE \n';
$aluno = $alunoRepository->findBy([
    'nome' => 'Amanda Bicas'
]);

var_dump($aluno);