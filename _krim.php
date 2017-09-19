<?php

// KRIM 1 START
if (isset($_POST['krim1'])){
    $krim1 = $_POST['krim1'];

     $velykket_array1 = array(
         "Du banket livskiten ut av damen og fikk med deg ", 
         "Den gamle damen ble redd og ga deg alle pengene. Du fikk med deg ",
         "Den gamle damen mistet lommeboken da hun ble redd og løp. I lommeboken lå det ");
    
    $mislykket_array1 = array(
        "Klarer du virkelig ikke å rane en gammel dame? Patetisk.", 
        "Du prøvde å rane din egen bestemor, men hun minte deg på middagen i morgen kl 18, så du ble fornøyd.",
        "Den gamle damen slo til deg og du fikk ikke med deg noen ting, bedre lykke neste gang.");
    
$mislykket1 = rand(0,2);
$velykket1 = rand(0,2);
$krim_chance = rand(1,10);
$krimtime1 = 0;
$krim_exp = rand(10, 25);
$krim_money = rand(100,500);
$timewait1 = time()+ $krimtime1;
$sql2="SELECT * from krim WHERE username='$username'";
$result2=mysqli_query($con, $sql2);
    
    /*
    if (krim_sjanse1 == 0) {
       $krim_chance = rand(1,10)
    } elseif (krim_sjanse1 == 1) {
       $krim_chance = rand(1,9)
    } elseif (krim_sjanse1 == 2) {
       $krim_chance = rand(1,8)
    } elseif (krim_sjanse1 == 3) {
       $krim_chance = rand(1,7)
    } 
    */  
    
    while($rows2=mysqli_fetch_array($result2)){
    $timeleft1= $rows2['krim1'];
    $available1= $rows2['krim1a'];
    $last1 = $timeleft1 - time();
        if ($available1 == 1) {
        echo '<div id="ventetid">
        
        Du må vente <b>'.$last1.' sekunder</b> før du kan gjøre en kriminell handling igjen!
        
        </div>';

        } elseif ($krim_chance == 2){
            echo '<div id="ventetid"><b>Mislykket!</b> '.$mislykket_array1[$mislykket1].'</div>';

            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

        } else {
            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

            $result = mysqli_query($con, "UPDATE users SET exp=exp+'$krim_exp', money=money+'$krim_money' WHERE username='$username'") or die(mysqli_error($con));

            echo '<div id="velykket">

            <b>Velykket!</b> '.$velykket_array1[$velykket1].' '.$krim_money.',-

            </div>';
        }
    }
}
// KRIM 1 SLUTT
      
// KRIM 2 START
if (isset($_POST['krim2'])){
    $krim2 = $_POST['krim2'];
    
     $velykket_array2 = array(
         "Du banket livskiten ut av damen og fikk med deg ", 
         "Den gamle damen ble redd og ga deg alle pengene. Du fikk med deg ",
         "Den gamle damen mistet lommeboken da hun ble redd og løp. I lommeboken lå det ");
    
    $mislykket_array2 = array(
        "Klarer du virkelig ikke å rane en gammel dame? Patetisk.", 
        "Du prøvde å rane din egen bestemor, men hun minte deg på middagen i morgen kl 18, så du ble fornøyd.",
        "Den gamle damen slo til deg og du fikk ikke med deg noen ting, bedre lykke neste gang.");
    
$mislykket2 = rand(0,2);
$velykket2 = rand(0,2);
$krim_chance = rand(1,10);
$krimtime1 = 0;
$krim_exp = rand(15, 45);
$krim_money = rand(100,500);
$timewait1 = time()+ $krimtime1;
$sql2="SELECT * from krim WHERE username='$username'";
$result2=mysqli_query($con, $sql2);
    while($rows2=mysqli_fetch_array($result2)){
    $timeleft1= $rows2['krim1'];
    $available1= $rows2['krim1a'];
    $last1 = $timeleft1 - time();
        if ($available1 == 1) {
        echo '<div id="ventetid">
        
        Du må vente <b>'.$last1.' sekunder</b> sekunder før du kan gjøre en kriminell handling igjen!
        
        </div>';

        } elseif ($krim_chance == 2){
            echo '<div id="ventetid"><b>Mislykket!</b> Klarer du ikke banke en gammel dame? Patetisk.</div>';

            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

        } else {
            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

            $result = mysqli_query($con, "UPDATE users SET exp=exp+'$krim_exp', money=money+'$krim_money' WHERE username='$username'") or die(mysqli_error($con));

            echo '<div id="velykket">

            Du banket livskiten ut av den gamle dama og fikk med deg '.$krim_money.',-

            </div>';
        }
    }
}
// KRIM 2 SLUTT
      
// KRIM 3 START
if (isset($_POST['krim3'])){
    $krim3 = $_POST['krim3'];

$krim_chance = rand(1,10);
$krimtime1 = 0;
$krim_exp = rand(25, 50);
$krim_money = rand(100,500);
$timewait1 = time()+ $krimtime1;
$sql2="SELECT * from krim WHERE username='$username'";
$result2=mysqli_query($con, $sql2);
    while($rows2=mysqli_fetch_array($result2)){
    $timeleft1= $rows2['krim1'];
    $available1= $rows2['krim1a'];
    $last1 = $timeleft1 - time();
        if ($available1 == 1) {
        echo '<div id="ventetid">

        Du må vente <b>'.$last1.' sekunder</b> sekunder før du kan gjøre en kriminell handling igjen!

        </div>';

        } elseif ($krim_chance == 2){
            echo '<div id="ventetid"><b>Mislykket!</b> Klarer du ikke banke en gammel dame? Patetisk.</div>';

            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

        } else {
            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

            $result = mysqli_query($con, "UPDATE users SET exp=exp+'$krim_exp', money=money+'$krim_money' WHERE username='$username'") or die(mysqli_error($con));

            echo '<div id="velykket">

            Du banket livskiten ut av den gamle dama og fikk med deg '.$krim_money.',-

            </div>';
        }
    }
}
// KRIM 3 SLUTT
      
// KRIM 4 START
if (isset($_POST['krim4'])){
    $krim4 = $_POST['krim4'];

    // velykket tilbakemelding
    $velykket_array4 = array(
        "Deg og ditt crew klarte å rane banken, dere fikk med dere ", 
        "Damen bak skranken ble redd og ga deg alle pengene. Du fikk med ",
        "Du hadde ikke trengt å skyte mannen i skranken, men du klarte hvertfall å stjele ");
    
    // mislykket tilbakemelding
    $mislykket_array4 = array(
        "Politiet var allerede i banken når du kom, du ble redd og gikk tomhendt hjem.", 
        "Banken hadde sluttet med penger, de var ikke villige til å gi deg bitcoins heller.",
        "DNB sine tjenester var nede, IGJEN, og fikk dermed ikke ta ut penger.");
    
$mislykket4 = rand(0,2);
$velykket4 = rand(0,2);
$krim_chance = rand(1,4);
$krimtime1 = 0;
$krim_exp = rand(90, 115);
$krim_money = rand(100,500);
$timewait1 = time()+ $krimtime1;
$sql2="SELECT * from krim WHERE username='$username'";
$result2=mysqli_query($con, $sql2);
    while($rows2=mysqli_fetch_array($result2)){
    $timeleft1= $rows2['krim1'];
    $available1= $rows2['krim1a'];
    $last1 = $timeleft1 - time();
        
        if ($available1 == 1) {
        echo '<div id="ventetid">

        Du må vente <b> '.$last1.' sekunder</b> sekunder før du kan gjøre en kriminell handling igjen!

        </div>';

        } elseif ($krim_chance == 2){
            
            echo '<div id="ventetid"><b>Mislykket!</b> '.$mislykket_array4[$mislykket4].'</div>';

            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

        } else {
            
            $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));

            $result = mysqli_query($con, "UPDATE users SET exp=exp+'$krim_exp', money=money+'$krim_money' WHERE username='$username'") or die(mysqli_error($con));

            echo '<div id="velykket">

            <b>Velykket!</b> '.$velykket_array4[$velykket4].' '.$krim_money.',-

            </div>';
        }
    }
}
// KRIM 4 SLUTT

// sql
    $sql2="SELECT * from krim WHERE username='$username'";
    $result2=mysqli_query($con, $sql2);

    $current_time = time();
    
    while($rows2=mysqli_fetch_array($result2)){
    $timeleft1 = $rows2['krim1'];
    $timeleft2 = $rows2['krim2'];
    $timeleft3 = $rows2['krim3'];
    $timeleft4 = $rows2['krim4'];
    $last1 = ($timeleft1 - $current_time);
    $last2 = ($timeleft2 - $current_time);
    $last3 = ($timeleft3 - $current_time);
    $last4 = ($timeleft4 - $current_time);
}

if($last1 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim1a='0', krim1='0' WHERE username='$username'")
    or die(mysqli_error($con));
}

if($last2 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim2a='0', krim2='0' WHERE username='$username'")
    or die(mysqli_error($con));
}

if($last3 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim3a='0', krim3='0' WHERE username='$username'")
    or die(mysqli_error($con));
}

if($last4 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim4a='0', krim4='0' WHERE username='$username'")
    or die(mysqli_error($con));
}


function crimemaketime($until){

   $now = time();
   $difference = $until - $now;

   $days = floor($difference/86400);
   $difference = $difference - ($days*86400);

   $hours = floor($difference/3600);
   $difference = $difference - ($hours*3600);

   $minutes = floor($difference/60);
   $difference = $difference - ($minutes*60);

   $seconds = $difference;
   $output = "$minutes Minutes and $seconds Seconds";

   return $output;
   
}

?>