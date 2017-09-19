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
        
if (isset($_POST['kjop'])){
    $radiobutton=$_POST['radiobutton'];

    if ($radiobutton == "1"){
        if($vapen == $vapenarray[0]) {
            echo 'Du har allerede en '.$vapenarray[0].'';
        } elseif($penger > $prisarray[0]) {
            echo 'Du kjøpte en '.$vapenarray[0].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[0]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[0]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }

    if ($radiobutton == "2"){
        if($vapen == $vapenarray[1]) {
            echo 'Du har allerede en '.$vapenarray[1].'';
        } elseif($penger > $prisarray[1]) {
            echo 'Du kjøpte en '.$vapenarray[1].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[1]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[1]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "3"){
        if($vapen == $vapenarray[2]) {
            echo 'Du har allerede en '.$vapenarray[2].'';
        } elseif($penger > $prisarray[2]) {
            echo 'Du kjøpte en '.$vapenarray[2].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[2]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[2]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "4"){
        if($vapen == $vapenarray[3]) {
            echo 'Du har allerede en '.$vapenarray[3].'';
        } elseif($penger > $prisarray[3]) {
            echo 'Du kjøpte en '.$vapenarray[3].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[3]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[3]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "5"){
        if($vapen == $vapenarray[4]) {
            echo 'Du har allerede en '.$vapenarray[4].'';
        } elseif($penger > $prisarray[4]) {
            echo 'Du kjøpte en '.$vapenarray[4].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[4]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[4]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "6"){
        if($vapen == $vapenarray[5]) {
            echo 'Du har allerede en '.$vapenarray[5].'';
        } elseif($penger > $prisarray[5]) {
            echo 'Du kjøpte en '.$vapenarray[5].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[5]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[5]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "7"){
        if($vapen == $vapenarray[6]) {
            echo 'Du har allerede en '.$vapenarray[6].'';
        } elseif($penger > $prisarray[6]) {
            echo 'Du kjøpte en '.$vapenarray[6].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[6]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[6]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }

    if ($radiobutton == "8"){
        if($vapen == $vapenarray[7]) {
            echo 'Du har allerede en '.$vapenarray[7].'';
        } elseif($penger > $prisarray[7]) {
            echo 'Du kjøpte en '.$vapenarray[7].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[7]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[7]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "9"){
        if($vapen == $vapenarray[8]) {
            echo 'Du har allerede en '.$vapenarray[8].'';
        } elseif($penger > $prisarray[8]) {
            echo 'Du kjøpte en '.$vapenarray[8].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[8]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[8]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
    
    if ($radiobutton == "10"){
        if($vapen == $vapenarray[9]) {
            echo 'Du har allerede en '.$vapenarray[9].'';
        } elseif($penger > $prisarray[9]) {
            echo 'Du kjøpte en '.$vapenarray[9].'';
            $betal = "UPDATE users SET money = ($penger - $prisarray[9]) WHERE username='$username'";
            mysqli_query($con, $betal) or die("Bad query: $betal");
            $vapen = "UPDATE users SET vapen = '$vapenarray[9]' WHERE username='$username'";
            mysqli_query($con, $vapen) or die("Bad query: $vapen");
        } else {
            echo "Du hadde ikke nok";
        }
    }
}
              
?>
        
        <link rel="stylesheet" type="text/css" href="css/vapenforhandler.css" />

    </head>

    <body style="margin: 0 auto; width: 1200px;">
        
        <form id="form1" name="form1" method="post" action=""> 

                    <input type="radio" name="radiobutton" id="radio1" value="1" />Kniv<br>
                    <input type="radio" name="radiobutton" id="radio1" value="2" />Mac 11<br>
                    <input type="radio" name="radiobutton" id="radio" value="3" />Revolver<br>
                    <input type="radio" name="radiobutton" id="radio" value="4" />Glock<br>
                    <input type="radio" name="radiobutton" id="radio" value="5" />Tec 9<br>
                    <input type="radio" name="radiobutton" id="radio" value="6" />Beneli M2<br>
                    <input type="radio" name="radiobutton" id="radio" value="7" />P90<br>
                    <input type="radio" name="radiobutton" id="radio" value="8" />AK-47<br>
                    <input type="radio" name="radiobutton" id="radio" value="9" />Scar-L<br>
                    <input type="radio" name="radiobutton" id="radio" value="10" />M16<br>
            
                <input type="submit" name="kjop" id="kjop" value="Kjøp våpen">
            
        </form>
    </body>
</html>












