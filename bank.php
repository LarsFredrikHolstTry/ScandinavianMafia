<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php'); ?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/bank.css" />
        </head>

    <body style="margin: 0 auto; width: 1200px;">
        <center>
            <div id="bank">
                <img src="images/handlinger/bank.png">
                <li id="bankdesign1"><b>Bankkonto</b></li>
                <li id="bankdesign">Kontoeier: <b><?php echo $username ?></b></li>
                <li id="bankdesign">Penger i banken: <?php echo number_format($bank_penger, 0, '.', ' '); ?>,- </li>
                <li id="bankdesign" ><form action="bank.php" method="post">
                    <input type="text" name="antallpenger" placeholder="" required />
                    <input type="submit" name="submit" value="Sett inn">
                </form>
                </li>
            </div>
        </center>
    </body>
</html>

<?php

include("auth.php");
require('connection/db.php');

if (isset($_REQUEST['antallpenger'])){
    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);

    $antallpenger = $_POST['antallpenger'];
    $penger = $row['money'];
    $bank_penger = $row['bank_money'];

    if ($penger < $antallpenger) {
        // ikke nok penger
        echo "<p style='color: #900a0a; text-align: center; margin-top: 280px;'>Du kan ikke sette inn mer penger enn du har.</p>";
    } else {
        // Sett inn
        $oppdaterbank = "UPDATE users SET bank_money = ($antallpenger + $bank_penger) WHERE username='$username'";
        mysqli_query($con, $oppdaterbank);
        $tavekk = "UPDATE users SET money = ($penger - $antallpenger) WHERE username='$username'";
        mysqli_query($con, $tavekk);
        header("Refresh:0; url=bank.php");
    }
}

?>
