<?php

require __DIR__.'/../lib/function.php' ;
;
$id='1';

$data = fetchById($id);
$formattedData=generateFormttedData($data);
$question=$formattedData['question'];
$answers=$formattedData['answers'];

$correctAnswer=$formattedData['correctAnswer'];
$correctAnswerValue=$answers[$correctAnswer];
$explanation=$formattedData['explanation']; 

include __DIR__.'/../template/question.tpl.php';