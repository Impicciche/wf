<?php

$input;
$winner="";

$attemptA=0;
$attemptB=0;


foreach ($input as $combination)
{
    if($combination[0]>$combination[1])
        $attemptA++;
    if($combination[0]<$combination[1])
        $attemptB++;


}

$winner = ($attemptA>$attemptB)?'A':'B';

echo $winner;

