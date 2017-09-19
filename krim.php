<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php');

include("auth.php");

$sql = "SELECT * FROM krim WHERE username = '".$_SESSION['username']."' LIMIT 1";
$result = mysqli_query($con, $sql) or die("Bad query: $sql");
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
?>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="css/krim.css" />

      <?php include('_krim.php'); ?>
      
  </head>
  
  <body style="margin: 0 auto; width: 1200px;">

    <center>
        <img src="images/handlinger/kriminalitet.png" class="krimbilde">
    </center>
      
      <button name="krim1" id="krim1" value="krim1" class="handling">Handling<a style="float:right">Ventetid</a></button>
      
    <form id="form1" name="form1" method="post" action=""> 

        <button name="krim1" id="krim1" value="krim1" class="krim">Ran en gammel dame <?php $krim1 ?><a style="float:right">50 sek</a></button>

        <button name="krim2" id="krim2" value="krim2" class="krim">Stjel kassa fra nærbutikken <?php $krim2 ?><a style="float:right">1 min</a></button>

        <button name="krim3" id="krim3" value="krim3" class="krim">Svindle bingoen på galleri <?php $krim3 ?><a style="float:right">3 min</a></button>

        <button name="krim4" id="krim4" value="krim4" class="krim">Ran en bank <?php $krim4 ?><a style="float:right">7 min</a></button>

    </form>
    
  </body>
</html>

