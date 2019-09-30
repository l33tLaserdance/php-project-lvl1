<?php

namespace Braingames\Games;

function gcd()
{
    $message = 'Find the greatest common divisor of given numbers.';
    $game = 'Braingames\Games\startGcdGame';
    hello($message, $game);
}

function startGcdGame()
{
    $stats = getEuclidStatsForGcd();
    return [
        'question' => $stats['first'] . ' ' . $stats['second'],
        'right' => $stats['result']
    ];
}

function getEuclidStatsForGcd()
{
    $stats = [];                                    // Инициализация "статов"
    $stats['first'] = rand(1, 100);                 // Получение первого стата
    $stats['second'] = rand(1, 100);                // Получение второго стата
    if ($stats['first'] > $stats['second']) {       // Если первый больше второго
        $stats['high'] = $stats['first'];           // "Высоким" становится первый
        $stats['low'] = $stats['second'];           // "Низким" становится второй
    } else {                                        // Иначе
        $stats['high'] = $stats['second'];          // "Высоким" становится второй
        $stats['low'] = $stats['first'];            // "Низким" становится первый
    }                                               // (даже если они будут равны)
    $remain = $stats['high'] % $stats['low'];       // Получение остатка от деления "высокого" на "низкий"
    if ($remain == 0) {                             // Если остаток равен нулю ("статы" были равны)
        $stats['result'] = $stats['low'];           // Записываем в результат делитель ("низкий")
        return $stats;                              // Возвращаем массив "статы"
    }                                               // Раз возврата не произошло, значит остаток не 0
    $last = $stats['low'];                          // Запись последнего делителя - "низкого"
    do {                                            // Старт цикла
        $final = $last % $remain;                   // Финальный остаток. Финальным он может стать на любой итерации
        $last = $remain;                            //цикла. Последним делителем становится остаток.
        $remain = $final;                           // Остатком становится текущий финальный остаток.
    } while ($final > 0);                           // Цикл повторяется до тех пор, пока финальный остаток не станет 0
    $stats['result'] = $last;                       // После остановки цикла последнее значение последнего делителя
    return $stats;                                  //как раз будет наибольшим делителем. Запись этого значения в
                                                    //результат и возврат массива "статы".
}
