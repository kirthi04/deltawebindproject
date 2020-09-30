<?php
include("headerbuy.php");
?>
<?php
$port=3308;
$con = mysqli_connect("localhost","root","","onlinemart",$port);
$itemidc = $_GET['post_i'];
$usersnamec = $_SESSION['username'];
$getseller = "SELECT * FROM items WHERE image_id = '$itemidc'";
$run_getseller = mysqli_query($con, $getseller);
$forsellername = mysqli_fetch_array($run_getseller);
$actsellername = $forsellername['sellername'];
$getsellerdetails = "SELECT * FROM userdetails WHERE username = '$actsellername'";
$run_getdetails = mysqli_query($con, $getsellerdetails);
$rowdetail = mysqli_fetch_array($run_getdetails);
$sellerfname = $rowdetail['fname'];
$sellerlname = $rowdetail['lname'];
$sellermail = $rowdetail['mailid'];
?>
<html>
<head>
<title>FRONT PAGE</title>
</head>
<style>
h1{
    text-align: center;
    margin-top:20px;
  color: black;
}
  
 .newd {
    border: 5px solid black;
    width: 550px;
    height:200px;
    background-color: "black";
    color: "white";
    margin-left: 470px;
    margin-top: 100px;
    background-color:  #fcea4a;
    background-image: radial-gradient(white,  #4da7ca;);
  box-shadow: 10px 10px 5px grey;
  padding-left: 20px;
  font-size: 16px;
}



</style>
<body>
    <div class="newd"><br>
    <h1>SELLER DETAILS</h1>
    <h2>SELLER NAME : <?php echo $sellerfname." ".$sellerlname; ?> </h2>
   <h2>SELLER EMAIL :  <?php echo $sellermail; ?></h2> <br>
  
</div>    
</form>

</body>
</html>