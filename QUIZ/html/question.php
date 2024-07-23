<?php

require __DIR__.'/../lib/function.php' ;
$question='aaa';
$id='2';

$data = fetchById($id);

$answers=[
    'A'=>'aaaa',
    'B'=>'bbbb',
    'C'=>'cccc',
    'D'=>'dddd',
];

$correctAnswer='B';
$correctAnswerValue=$answers[$correctAnswer];
$explanation='解説解説'; 

include __DIR__.'/../template/question.tpl.php';