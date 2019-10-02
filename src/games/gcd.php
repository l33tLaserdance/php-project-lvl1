<?php

namespace Braingames\Games;

define("GCDMESSAGE", 'Find the greatest common divisor of given numbers.');
define("GCDGAME", 'Braingames\Games\getGcdData');

function gcd()
{
    hello(GCDMESSAGE, GCDGAME);
}

function getGcdData()
{
    $data = getEuclidDataForGcd();
    return [
        'question' => $data['first'] . ' ' . $data['second'],
        'right' => $data['result']
    ];
}

function getEuclidDataForGcd()
{
    $data = [];                                    // Инициализация данных
    $data['first'] = rand(1, 100);                 // Получение первого числа
    $data['second'] = rand(1, 100);                // Получение второго числа
    if ($data['first'] > $data['second']) {        // Если первое больше второго
        $data['high'] = $data['first'];            // Большим становится первое
        $data['low'] = $data['second'];            // Меньшим становится второе
    } else {                                       // Иначе
        $data['high'] = $data['second'];           // Большим становится второе
        $data['low'] = $data['first'];             // Меньшим становится первое
    }                                              // (даже если они будут равны)
    $remain = $data['high'] % $data['low'];        // Получение остатка от деления большего на меньшее
    if ($remain == 0) {                            // Если остаток равен нулю (числа были равны)
        $data['result'] = $data['low'];            // В результат записывается делитель (меньшее число)
        return $data;                              // Возвращается массив с данными
    }                                              // Раз возврата не произошло, значит остаток не 0
    $last = $data['low'];                          // Запись последнего делителя - меньшего числа
    do {                                           // Старт цикла
        $final = $last % $remain;                  // Финальный остаток. Финальным он может стать на любой итерации
        $last = $remain;                           //цикла. Последним делителем становится остаток.
        $remain = $final;                          // Остатком становится текущий полученный остаток.
    } while ($final > 0);                          // Цикл повторяется до тех пор, пока полученный остаток не станет 0
    $data['result'] = $last;                       // После остановки цикла последнее значение последнего делителя
    return $data;                                  //как раз будет наибольшим делителем. Запись этого значения в
                                                   //результат и возврат массива с данными.
}
