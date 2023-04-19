
<?php
include("config/constants.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index1.css">
    <script src="js/validate.js"></script>
</head>

<body>
    <!--Start of menu section-->
    <div class="lg">
        <div class="wrapper">
            <center><h1>Menu</h1></center>
            <div class="logo">
                <img src="images/logo.png" alt="Logo Goes Here" class="img-responsive">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo HOMEURL;?>/index.php">Home</a></li>
                    <li><a href="<?php echo HOMEURL;?>/category1.php">Category</a></li>
                    <li><a href="<?php echo HOMEURL;?>/food.php">Food</a></li>
                    <li><a href="<?php echo HOMEURL;?>/order.php">Order</a></li>
                    <li><a href="<?php echo HOMEURL;?>/contactus.php">Contact</a></li>
                </ul>
            </div>
            <div class="clear-fix"></div>
        </div>
    </div>
    <!--End of menu section-->