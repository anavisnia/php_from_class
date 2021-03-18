<?php 
$dist = null;
define ('API', 'https://www.distance24.org/route.json?stops=');
if(!empty($_GET)) {

    // if(!file_exists(__DIR__.'/data.json')) {
    //     $empty = ['time' => time(), 'data' => []]
    // }


    $city1 = $_GET['c1'];
    $city2 = $_GET['c2'];

    //serverio  vidus
    $curl=curl_init();
    curl_setopt($curl, CURLOPT_URL, API.$city1.'|'.$city2);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $answer = curl_exec($curl); // siunciame uzklausa, laukiame.... atsakyma irasome i $answer
    curl_close($curl);
    $answer = json_decode($answer);
    $dist = $answer->distance;
    $image1 = $answer->stops[0]->wikipedia->image ?? '';
    $image2 = $answer->stops[1]->wikipedia->image ?? '';
    $result = 'API';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Distance-24</title>
</head>
<body>
    <form action="" method="get">
        Miestas1: <input type="text" name="c1">
        Miestas2: <input type="text" name="c2">
        <button type="submit">Atstumas</button>
    </form>
<h2>Atstumas: <?= $dist ?> km</h2>
<?php if(null !== $dist) : ?>
    <h1 style="color:red;">Result from: <?= $result ?></h1>
    <img style="height:400px;" src="<?= $image1 ?>" alt="">
    <img style="height:400px;" src="<?= $image2 ?>" alt="">
<?php endif ?>
</body>
</html>