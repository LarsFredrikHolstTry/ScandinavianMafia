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
        
$bil = $row['bil'];
$penger = $row['money'];
$bilarray = array("VW Golf R32", "Volvo S40", "Camaro", "Bentley", "Mercedes Benz", "Audi A4", "BMW X6M", "Rolls Royce");
$bilprisarray = array(89000, 179000, 379000, 1429000, 349000, 119000, 599000, 3390000);
        
if (isset($_POST['vwgolfr32'])){
    $vwgolfr32 = $_POST['vwgolfr32'];
    
    if($bil == $bilarray[0]) {
        echo 'Du har allerede en '.$bilarray[0].'';
    } elseif($penger > $bilprisarray[0]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[0].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[0]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[0]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['volvos40'])){
    $volvos40 = $_POST['volvos40'];
    
    if($bil == $bilarray[1]) {
        echo 'Du har allerede en '.$bilarray[1].'';
    } elseif($penger > $bilprisarray[1]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[1].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[1]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[1]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['camaro'])){
    $camaro = $_POST['camaro'];
    
    if($bil == $bilarray[2]) {
        echo 'Du har allerede en '.$bilarray[2].'';
    } elseif($penger > $bilprisarray[2]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[2].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[2]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[2]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}

if (isset($_POST['bentley'])){
    $bentley = $_POST['bentley'];
    
    if($bil == $bilarray[3]) {
        echo 'Du har allerede en '.$bilarray[3].'';
    } elseif($penger > $bilprisarray[3]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[3].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[3]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[3]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['mercedesbenz'])){
    $mercedesbenz = $_POST['mercedesbenz'];
    
    if($bil == $bilarray[4]) {
        echo 'Du har allerede en '.$bilarray[4].'';
    } elseif($penger > $bilprisarray[4]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[4].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[4]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[4]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['audia4'])){
    $audia4 = $_POST['audia4'];
    
    if($bil == $bilarray[5]) {
        echo 'Du har allerede en '.$bilarray[5].'';
    } elseif($penger > $bilprisarray[5]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[5].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[5]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[5]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['bmwx6m'])){
    $bmwx6m = $_POST['bmwx6m'];
    
    if($bil == $bilarray[6]) {
        echo 'Du har allerede en '.$bilarray[6].'';
    } elseif($penger > $bilprisarray[6]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[6].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[6]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[6]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}
        
if (isset($_POST['rollsroyce'])){
    $rollsroyce = $_POST['rollsroyce'];
    
    if($bil == $bilarray[7]) {
        echo 'Du har allerede en '.$bilarray[7].'';
    } elseif($penger > $bilprisarray[7]) {
        echo '<div id="velykket">Du kjøpte en '.$bilarray[7].'</div>';
        $betal = "UPDATE users SET money = ($penger - $bilprisarray[7]) WHERE username='$username'";
        mysqli_query($con, $betal) or die("Bad query: $betal");
        $bil = "UPDATE users SET bil = '$bilarray[7]' WHERE username='$username'";
        mysqli_query($con, $bil) or die("Bad query: $bil");
    } else {
        echo "Du hadde ikke nok";
    }
}

?>
        
        <link rel="stylesheet" type="text/css" href="css/bilforhandler.css" />

    </head>

<body style="margin: 0 auto; width: 1200px;">
        
    <form id="form1" name="form1" method="post" action=""> 
            <center>
                <img class="bilforhandlerimg" src="images/handlinger/bilforhandler.png">
                <div class="container">
                    <div id="vapen">
                        <img src="images/cars/vwgolfr32.png">
                        <li><?php echo number_format($bilprisarray[0], 0, '.', ' '); ?>,-</li>
                        <button name="vwgolfr32" id="vwgolfr32" value="vwgolfr32" class="bilbtn">Kjøp <?php echo $bilarray[0]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/volvos40.png">
                        <li><?php echo number_format($bilprisarray[1], 0, '.', ' '); ?>,-</li>
                        <button name="volvos40" id="volvos40" value="volvos40" class="bilbtn">Kjøp <?php echo $bilarray[1]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/camaro.png">
                        <li><?php echo number_format($bilprisarray[2], 0, '.', ' '); ?>,-</li>
                        <button name="camaro" id="camaro" value="camaro" class="bilbtn">Kjøp <?php echo $bilarray[2]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/bentley.png">
                        <li><?php echo number_format($bilprisarray[3], 0, '.', ' '); ?>,-</li>
                        <button name="bentley" id="bentley" value="bentley" class="bilbtn">Kjøp <?php echo $bilarray[3]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/mercedesbenz.png">
                        <li><?php echo number_format($bilprisarray[4], 0, '.', ' '); ?>,-</li>
                        <button name="mercedesbenz" id="mercedesbenz" value="mercedesbenz" class="bilbtn">Kjøp <?php echo $bilarray[4]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/audia4.png">
                        <li><?php echo number_format($bilprisarray[5], 0, '.', ' '); ?>,-</li>
                        <button name="audia4" id="audia4" value="audia4" class="bilbtn">Kjøp <?php echo $bilarray[5]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/bmwx6m.png">
                        <li><?php echo number_format($bilprisarray[6], 0, '.', ' '); ?>,-</li>
                        <button name="bmwx6m" id="bmwx6m" value="bmwx6m" class="bilbtn">Kjøp <?php echo $bilarray[6]; ?></button>
                    </div>
                    <div id="vapen">
                        <img src="images/cars/rollsroyce.png">
                        <li><?php echo number_format($bilprisarray[7], 0, '.', ' '); ?>,-</li>
                        <button name="rollsroyce" id="rollsroyce" value="rollsroyce" class="bilbtn">Kjøp <?php echo $bilarray[7]; ?></button>
                    </div>
                </div>
            </center>
        </form>
    </body>
</html>
