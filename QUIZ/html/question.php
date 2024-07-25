<?php

require __DIR__.'/../lib/function.php' ;
;
$id='1';

$data = fetchById($id);
$question=nl2br(htmlspecialchars($data[1]));
$answers=[
    'A'=>htmlspecialchars($data[2]),
    'B'=>htmlspecialchars($data[3]),
    'C'=>htmlspecialchars($data[4]),
    'D'=>htmlspecialchars($data[5]),
];

$correctAnswer=strtoupper($data[6]);
$correctAnswerValue=$answers[$correctAnswer];
$explanation=nl2br(htmlspecialchars($data[7])); 

include __DIR__.'/../template/question.tpl.php';