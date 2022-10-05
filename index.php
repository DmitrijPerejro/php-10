<?php
  function makeList($length = 50): array {
    $arr = [];
    for ($i = 0; $i < $length; $i++) {
      $arr[] = rand(0, 1000);
    }
    return $arr;
  }

  function getSum(array $arr): float {
    $sum = 0;
    foreach ($arr as $item) {
      $sum+= $item;
    }
    return $sum;
  }

  function getAverage(array $arr): float {
    return  getSum($arr) / count($arr);
  }

  function getAscending(array $arr): array {
    sort($arr, SORT_NUMERIC);
    return $arr;
  }

  function getDescending(array $arr): array {
    rsort($arr, SORT_NUMERIC);
    return $arr;
  }

  function get5elements(array $arr): array {
    return array_slice($arr, 0 , 5);
  }

  $arr = makeList();
  // Сумма всех элементов массива.
  var_dump(getSum($arr));
  // Среднее всех элементов массива (среднее арифметическое).
  var_dump(getAverage($arr));
  // Отсортированный массив по возрастанию.
  var_dump(getAscending($arr));
  // Отсортированный массив по убыванию.
  var_dump(getDescending($arr));
  // Вывести 5 минимальных чисел из массива
  var_dump(get5elements(getAscending($arr)));
  // Вывести 5 максимальных чисел из массива.
  var_dump(get5elements(getDescending($arr)));


