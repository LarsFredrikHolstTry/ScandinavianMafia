<?php

    /*   Går gjennom brukeren sin database og legger i row, hent ved 
    *    $money = $row['emoney']; 
    *    money er variabelnavnet du finner på og money er navnet fra databasen.
    */

function pengerank(){
    
    //Inkluderer DB
    include("auth.php");
    
    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);
    $money = $row['money'];
    $bank_money = $row['bank_money'];
    $total_money = ($money + $bank_money);

    //De forskjellige rank upsene, må endre i database
    if($total_money > 0 && $total_money < 2000){
        echo'NAVer';
    }
    elseif($total_money > 2001 && $total_money < 15000){
        echo 'Arbeider';
    }
    elseif($total_money > 15001 && $total_money < 50000){
        echo 'Langer';
    }
    elseif($total_money > 50001 && $total_money < 100000){
        echo 'Litt rik';
    }
    elseif($total_money > 100001 && $total_money < 100000){
        echo 'Gambler';
    }
    elseif($total_money > 100001 && $total_money < 125000){
        echo 'Aksjemegler';
    }
    elseif($total_money > 125001 && $total_money < 175000){
        echo 'Millionær';
    }   
    elseif($total_money > 175001 && $total_money < 225000){
        echo 'Multimillionær';
    }
    elseif($total_money > 225001 && $total_money < 3500000000000000000000000000){
        echo 'Oljesjeik';
    }
}
?>

