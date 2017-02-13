<?php

function fibo($n)
{

    if ($n < 0) {
        return 0;
    }
    elseif ($n < 2) return ($n);

    return fibo($n - 1) + fibo($n - 2);

}

for ($i = 0; $i <= 20; $i++)
    echo 'fibonacci(' . $i . ') = ' . number_format(fibo($i), , ',', ' ') . '<br>';