<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require "/../vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
$nome = $argv[2];

$aluno = $entityManager->find(Aluno::class, $id);
$aluno->setNome($nome);

$entityManager->flush();
