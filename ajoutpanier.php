<?php
if(isset($_POST['total']) && $_POST['total'] != 0.00){
    $nbchauvesouris = $_POST['nbchauvesouris'];
    $nbfantome = $_POST['nbfantome'];
    $nbaraignee = $_POST['nbaraignee'];
    $nbzombie = $_POST['nbzombie'];
    $nbsquelette = $_POST['nbsquelette'];
    $total = $_POST['total'];

    session_start();
    $_SESSION['nbchauvesouris'] = $nbchauvesouris;
    $_SESSION['nbfantome'] = $nbfantome;
    $_SESSION['nbaraignee'] = $nbaraignee;
    $_SESSION['nbzombie'] = $nbzombie;
    $_SESSION['nbsquelette'] = $nbsquelette;
    $_SESSION['total'] = $total;
}


?>