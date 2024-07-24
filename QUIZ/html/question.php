<?php

require __DIR__.'/../lib/function.php' ;
$question='aaa';
$id='1';

$data = fetchById($id);

$answers=[
    'A'=>$data[2],
    'B'=>$data[3],
    'C'=>$data[4],
    'D'=>$data[5],
];

$correctAnswer=strtoupper($data[6]);
$correctAnswerValue=$answers[$correctAnswer];
$explanation=$data[7]; 

include __DIR__.'/../template/question.tpl.php';