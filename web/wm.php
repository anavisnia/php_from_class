<?php
if(!empty($_POST)) {
    // die('POST');
    _pc($_POST); // atspausdinti ka postinam
    // atlikti veiksmus ir uzsisauguoti info is posto
    header('Location: http://localhost/bit/zuikis/wm.php'); // <----- rezultatai yra cia
    header('Bla: bla bla');
    die; //nera daugiau info // nutraukia skripto veikima
}


?>

<a href="?kabinetas=nr52&valdininkas=Petras">Buhalterija Petras</a>
<a href="?kabinetas=nr53&valdininkas=Jonas">Finansistai Jonas</a>
<a href="?kabinetas=nr53&valdininkas=Ona">Finansistai Ona</a>
<?php
_pc($_GET);



if(isset($_GET['kabinetas']) && isset($_GET['valdininkas'])) {
    if($_GET['kabinetas'] == 'nr52') {
        echo '<h1>Buhalterija</h1>';
        echo '<p>Darbuotojas:' . $_GET['valdininkas'] . '</p>';
    } elseif($_GET['kabinetas'] == 'nr53') {
        echo '<h1>Vyr. Finansistai</h1>';
        echo '<p>Darbuotojas:' . $_GET['valdininkas'] . '</p>';
    } else {
        echo '<h1>Niekur napataikem</h1>';
    }
}

// forma
?>

<form action="" method="post">

<input type="text" name="kabinetas">
<input type="text" name="valdininkas">

<button type="submit">SPAUSTI</button>
</form>