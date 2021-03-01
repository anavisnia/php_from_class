<?php 
$trecias = 0;

function sudetis($vienas, $antras) {
    global $trecias; // <--- is global scoupo / bet tai yra bloga praktika
    // $trecias++;
    $rezultatas = $vienas + $antras + $trecias;
    return $rezultatas;
}

//_pr($GLOBALS['trecias']); //<-------- super senoviskas/ galima jame rasti ir musu sukurtus kintamuosiusi
//_pr($GLOBALS); //<-------- super senoviskas

echo sudetis(1, 5, 8, 10) . '<br>';
$m = [4, 16];

echo sudetis(...$m) . '<br>'; // isvinioti masyva $veinas -> 4 $antras-> 16


function vidurkis(...$skaiciai)
   {
       _pr($skaiciai);

      $sudetis = 0;
      foreach ($skaiciai as $val)
    {
      $sudetis += $val;
    }
    $vidurkis = $sudetis / count($skaiciai);
    return $vidurkis;
   }
   echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20) . '<br>' . '<br>';

   // static kintamasis **********************

function fooNoStatic() {
    $index = 0;
    $index++;
    echo "$index\n";
}
fooNoStatic();
echo '<br>';
fooNoStatic();
echo '<br>';
fooNoStatic();
echo '<br>' . '<br>';

function foo() {
    static $index = 0;
    $index++;
    echo "$index\n";
}
foo();
echo '<br>';
foo();
echo '<br>';
foo();
echo '<br>' . '<br>';

// rekursine funkcija **********************
function recursive($num){
    echo $num, '<br>';
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1);
    }
}
$startNum = 1;
recursive($startNum);
echo '<br>' . '<br>';

// anonimine funkcija **********************
$f = function($a, $b){
    return $a[0] <=> $b[0];
};

function aaa($a, $b){
    return $a[0] <=> $b[0];
};

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
usort($masyvas, 'aaa');

usort($masyvas, function($a, $b){
    return $a[0] <=> $b[0];
});

_pr($masyvas);

// anonimines funkcijos matomumo ribos **********************
$result = 0;

$one = function()
{ 
    var_dump($result); 
};
 
$two = function() use ($result)
{ 
    var_dump($result); 
};
 
$three = function() use (&$result)
{ 
    var_dump($result); 
};
 
$result++;
 
$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$three();    // int(1)

// anonimines rekursine funkcija ********************** nelabai naudojama

$func = function ($limit = NULL) use (&$func) { 
    static $current = 10; 
     
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
     
    // spausdinam reikšmę.
    echo "$current<br>"; 
     
    $current--; 
     
    $func(); 
 }; 
  //  Kviečiam funkciją
 $func();