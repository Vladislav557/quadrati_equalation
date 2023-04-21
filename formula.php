<?php

function quadratic_equation(int|float $a, int|float $b, int|float $c): mixed
{
    if ($b === 0 && $c === 0) {
        return 0;
    }

    if ($b === 0) {
        if (-($c / $a) > 0) {
            return [
                'x1' => -sqrt(-($c / $a)),
                'x2' => sqrt(-($c / $a))
            ];
        } 
        return 'Корней нет';
    }

    if ($c === 0) {
        return [
            'x1' => 0,
            'x2' => -($b / $a)
        ];
    }
    
    $discr = $b ** 2 - 4 * $a * $c;

    if ($discr > 0) {
        $x1 = (-$b + sqrt($discr)) / (2 * $a);
        $x2 = (-$b - sqrt($discr)) / (2 * $a);
        return [
            'x1' => $x1,
            'x2' => $x2
        ];
    } elseif ($discr === 0) {
        return -$b / (2 * $a);
    } else {
        return 'Корней нет';
    }
}
