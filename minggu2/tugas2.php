<?php

$a = 6;
$b = 1;

//echo "Penjumlahan dan Pengurangan : " . PHP_EOL;
$penjumlahan = $a + $b;
$pengurangan = $a - $b;
//echo $penjumlahan . PHP_EOL;
//echo $pengurangan .PHP_EOL;


//echo "Perkalian : " . PHP_EOL;
$perkalian1 = $a * 2;
$perkalian2  = $a * 2.5;

//echo $perkalian1 . PHP_EOL;
//echo $perkalian2 .PHP_EOL;

//echo "Pembagian : ". PHP_EOL;
$pembagian1 = $a/4;
$pembagian2 = $a/4.0;

//echo $pembagian1. PHP_EOL ;
//echo $pembagian2 .PHP_EOL;

$modulus1 = $a % 5 ; 
$modulus2 = $a % 4 ;
$modulus3 = $a % 3 ;

//echo $modulus1 .PHP_EOL ;
//echo $modulus2 .PHP_EOL;
//echo $modulus3 .PHP_EOL;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas No 2 PemNet Fadhil</title>
</head>
<body>
    <div class="outer-container">
        <div class="inner-container"> 
            Penjumlahan dan Pengurangan :
            <div>6 + 1 = <?= $penjumlahan ?></div>
            <div>6 - 1 = <?= $pengurangan ?></div>
        </div>
        <div class="inner-container"> 
            Perkalian :
            <div>6 * 2 = <?= $perkalian1 ?></div>
            <div>6 * 2.5 = <?= $perkalian2 ?></div>
        </div>
        <div class="inner-container"> 
            Pembagian :
            <div>6 / 4 = <?= $pembagian1 ?></div>
            <div>6 / 4.0 = <?= $pembagian2 ?></div>
            <div>6 % 5 = <?= $modulus1 ?></div>
            <div>6 % 4 = <?= $modulus2 ?></div>
            <div>6 % 3 = <?= $modulus3 ?></div>
        </div>
    </div>
</body>
</html>

<style>
    .outer-container{
    margin-inline : auto;
    width: 1280px;
    height: 720px;
    background-color: black;
    display: flex;
    flex-direction : column;
    justify-content: center;
    align-items: center;
    color : white;
    text-align: center;
}

.inner-container{
    margin-bottom: 50px;
    color: white;
    font-size: 32px;
}
</style>