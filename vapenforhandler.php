<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php'); ?>

<html>
    <head>

<?php 
    
        
include("auth.php");
require('connection/db.php');
    
$sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
$result = mysqli_query($con, $sql) or die("Bad query: $sql");
$row = mysqli_fetch_assoc($result);
        
$vapen = $row['vapen'];
$penger = $row['money'];
$vapenarray = array("Kniv", "Mac 11", "Revolver", "Glock", "Tec 9", "Beneli M2", "P90", "AK-47", "Scar-L", "M16");
$prisarray = array(300, 2000, 4000, 5000, 7000, 10000, 11000, 12000, 17000, 22000);
        
if (isset($_POST['kniv'])){
    $kniv = $_POST['kniv'];
    
    if($vapen == $vapenarray[0]) {
        echo 'Du har allerede en '.$vapenarray[0].'';
    } elseif($penger > $prisarray[0]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[0].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[0]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[0]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['mac11'])){
    $mac11 = $_POST['mac11'];
    
    if($vapen == $vapenarray[1]) {
        echo 'Du har allerede en '.$vapenarray[1].'';
    } elseif($penger > $prisarray[1]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[1].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[1]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[1]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['revolver'])){
    $revolver = $_POST['revolver'];
    
    if($vapen == $vapenarray[2]) {
        echo 'Du har allerede en '.$vapenarray[2].'';
    } elseif($penger > $prisarray[2]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[2].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[2]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[2]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}

if (isset($_POST['glock'])){
    $glock = $_POST['glock'];
    
    if($vapen == $vapenarray[3]) {
        echo 'Du har allerede en '.$vapenarray[3].'';
    } elseif($penger > $prisarray[3]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[3].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[3]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[3]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['tec9'])){
    $tec9 = $_POST['tec9'];
    
    if($vapen == $vapenarray[4]) {
        echo 'Du har allerede en '.$vapenarray[4].'';
    } elseif($penger > $prisarray[4]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[4].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[4]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[4]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['benelim2'])){
    $benelim2 = $_POST['benelim2'];
    
    if($vapen == $vapenarray[5]) {
        echo 'Du har allerede en '.$vapenarray[5].'';
    } elseif($penger > $prisarray[5]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[5].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[5]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[5]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['p90'])){
    $p90 = $_POST['p90'];
    
    if($vapen == $vapenarray[6]) {
        echo 'Du har allerede en '.$vapenarray[6].'';
    } elseif($penger > $prisarray[6]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[6].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[6]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[6]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['ak47'])){
    $ak47 = $_POST['ak47'];
    
    if($vapen == $vapenarray[7]) {
        echo 'Du har allerede en '.$vapenarray[7].'';
    } elseif($penger > $prisarray[7]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[7].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[7]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[7]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['scar'])){
    $scar = $_POST['scar'];
    
    if($vapen == $vapenarray[8]) {
        echo 'Du har allerede en '.$vapenarray[8].'';
    } elseif($penger > $prisarray[8]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[8].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[8]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[8]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['m16'])){
    $m16 = $_POST['m16'];
    
    if($vapen == $vapenarray[9]) {
        echo 'Du har allerede en '.$vapenarray[9].'';
    } elseif($penger > $prisarray[9]) {
        echo '<div id="velykket">Du kjøpte en '.$vapenarray[9].'</div>';
        $betal = "UPDATE users SET money = ($penger - $prisarray[9]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $vapen = "UPDATE users SET vapen = '$vapenarray[9]' WHERE username='$username'";
        mysqli_query($con, $vapen) or die("Bad query: $vapen");
    } else {
        echo "Du hadde ikke nok";
    }
}
?>
        
        <link rel="stylesheet" type="text/css" href="css/vapenforhandler.css" />

    </head>

<body style="margin: 0 auto; width: 1200px;">
        
    <form id="form1" name="form1" method="post" action=""> 
            <center>
                <img class="vapenforhandlerimg" src="images/handlinger/vapenforhandler.png">
                <div class="container">
                    <div id="vapen">
                        <img src="images/weapons/kniv.png">
                        <li><?php echo $prisarray[0]; ?>,-</li>
                        <button name="kniv" id="kniv" value="kniv" class="vapenbtn">Kjøp kniv</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/mac11.png">
                        <li><?php echo $prisarray[1]; ?>,-</li>
                        <button name="mac11" id="mac11" value="mac11" class="vapenbtn">Kjøp mac11</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/revolver.png">
                        <li><?php echo $prisarray[2]; ?>,-</li>
                        <button name="revolver" id="revolver" value="revolver" class="vapenbtn">Kjøp Revolver</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/glock.png">
                        <li><?php echo $prisarray[3]; ?>,-</li>
                        <button name="glock" id="glock" value="glock" class="vapenbtn">Kjøp Glock</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/tec9.png">
                        <li><?php echo $prisarray[4]; ?>,-</li>
                        <button name="tec9" id="tec9" value="tec9" class="vapenbtn">Kjøp Tec-9</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/benelim2.png">
                        <li><?php echo $prisarray[5]; ?>,-</li>
                        <button name="benelim2" id="benelim2" value="benelim2" class="vapenbtn">Kjøp Baneli M2</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/p90.png">
                        <li><?php echo $prisarray[6]; ?>,-</li>
                        <button name="p90" id="p90" value="p90" class="vapenbtn">Kjøp P90</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/ak47.png">
                        <li><?php echo $prisarray[7]; ?>,-</li>
                        <button name="ak47" id="ak47" value="ak47" class="vapenbtn">Kjøp AK-47</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/scar.png">
                        <li><?php echo $prisarray[8]; ?>,-</li>
                        <button name="scar" id="scar" value="scar" class="vapenbtn">Kjøp SCAR-L</button>
                    </div>
                    <div id="vapen">
                        <img src="images/weapons/m16.png">
                        <li><?php echo $prisarray[9]; ?>,-</li>
                        <button name="m16" id="m16" value="m16" class="vapenbtn">Kjøp M16</button>
                    </div>
                </div>
            </center>
        </form>
    </body>
</html>












