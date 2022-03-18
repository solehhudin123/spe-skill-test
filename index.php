<?php

    function narcissistic(int $bilangan): bool {
        $bilArr   = str_split($bilangan);
        $bil_lenght = count($bilArr);
        $total = 0;
        foreach($bilArr as $n){
        $total += pow((int)$n, $bil_lenght);
        }	
        return $total==$bilangan;
    }
    function parity_outlier($arrBilangan) {
        $odds_int = [];
        $evens_int = [];
        foreach ($arrBilangan as $item) {
        if ($item % 2){
            array_push($odds_int, $item);
        }else{
            array_push($evens_int, $item);
        }
        }
        return count($evens_int) === 1 ? $evens_int[0] : $odds_int[0];
    }
    function findNeedle($arr,$Stringfind){
        return array_filter($arr, function($value) use ($Stringfind) {
            return strpos($value, $Stringfind) !== false;
        });
    }
    function blueOcean($Arr1, $Arr2){
        $valArr = array_diff($Arr1,$Arr2);
        $Arr1 = array();
        foreach ($valArr as $isValid){
            $Arr1[] = $isValid;
        }
        return $Arr1;
    } 
  echo "Soal nomer 1 : Narcissistic <br>";
  $case1_1 = (narcissistic(153) == 1) ? 'BENAR':'SALAH';
  $case1_2 = (narcissistic(111) == 1) ? 'BENAR':'SALAH';
  echo "CASE 1 :narcissistic(153) RESULT :  ".$case1_1."<br>";
  echo "CASE 1 :narcissistic(111) RESULT :  ".$case1_2."<br>";
  echo "<br>Soal nomer 2 : Parity Outlier<br>";
  $case2_1 = parity_outlier([2, 4, 0, 100, 4, 11, 2602, 36]);
  $case2_2 = parity_outlier([160, 3, 1719, 19, 11, 13, -21]);
  $case2_3 = parity_outlier([11, 13, 15, 19, 9, 13, -21]);
  echo $case2_1."<br>".$case2_2."<br>".$case2_3."<br>";
  echo "Soal nomer 3 : NEEDLE IN THE HAYSTACK <br>";
  $find = findNeedle(["merah", "biru", "kuning", "hitam", "abu-abu"], "biru");
  echo "EXAMPLE findNeedle(['merah', 'biru', 'kuning', 'hitam', 'abu-abu'], 'biru') <br>";
  echo "HASIL EXAMPLE : ";
  echo (!empty($find)) ? "Ditemukan ".implode('; ', $find)." &nbsp;":"Tidak ditemukan.";
  var_dump($find);
  echo "<br><br><br>";
  echo "Soal nomer 4 : THE BLUE OCEAN REVERSE <br>";
  $a = blueOcean([1,2,3,4,6,10], [1]);
  $b = blueOcean([1,5,5,5,5,3], [5]);
  echo "<pre>";
  echo "TEST CASE 1 : ";
  var_dump($a);
  echo "<pre>";
  echo "TEST CASE 2 : ";
  var_dump($b);



?>