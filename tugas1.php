<?php 

$a = 5;
$b = 4;
$c = 3;
$d = 2;
$e = 1;


$hasil = ((($a + $b)/($c*$d))- $e);

// echo "$hasil";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No1 Tugas Pemnet2 Fadhil</title>
</head>
<body>
    <div class="outer-container">
        a = 5 , b= 4 , c = 3 , d = 2 , e = 1
        <br>
        Nilai dari (($a+$b)/($c*$d))-$e adalah 
        <div class="inner-container">
            <?php echo $hasil ?>
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
    
    color: white;
    font-size: 32px;
}
</style>