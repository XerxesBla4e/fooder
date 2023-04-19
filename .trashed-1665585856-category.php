<?php
include("partials/menu.php");?>

<?php
if(isset($_GET["cat_id"])){
    $id = $_GET["cat_id"];

    $sql = "SELECT title FROM tbl_category WHERE id=$id";
    $res = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($res);
    $title = $rows["title"];
    
}else{
    header("location:".HOMEURL);
}
?>
 <!--Start of search section-->
 <div class="food-search">
    <div class="wrapper text-centre">
       <h2 class="text-white">Food Category Selected <a href="<?php echo HOMEURL;?>index.php"><?php echo $title; ?></a></h2>
    </div>
</div>

 <!--Start Of Food Section-->
 <div class="food-item">
        <div class="wrapper">
            <center><h1>Food</h1></center>
                 <?php
                    $sql1 = "SELECT * FROM tbl_food WHERE category_id=$id";
                    $res1 = mysqli_query($conn,$sql1);
                    $count = mysqli_num_rows($res1);
                    if($count>0){
                        while($rows1=mysqli_fetch_assoc($res1)){
                            $food_id = $rows1["id"];
                            $food_title = $rows1["title"];
                            $image_name = $rows1["image_name"];
                            $price = $rows1["price"];
                            $description = $rows1["description"];
                            ?>
                                <div class="Food-menu-box">
                                <div class="Food-image">
                                <?php
                                   if($image_name!=""){
                                       ?>
                                    <img src="<?php echo HOMEURL; ?>images/food/<?php echo $image_name;?>" alt="Food Image Goes Here" class="img-responsive img-curve">   
                                       <?php
                                   }else{
                                       echo "<div class='error'>Food Image Not Available</div>";
                                   }
                                ?>
                                    
                                    </div>
                                        <div class="Food-description">
                                        <h3><?php echo $food_title; ?></Title></h3>
                                        <p class="food-price"><?php echo $price; ?></p>
                                        <p><strong><?php echo $description; ?></strong></p><br>
                                        <a href="<?php echo HOMEURL; ?>order.php?food_id=<?php echo $food_id; ?>" class="btnlnk btn-primary">Order</a>
                                    </div>
                                </div>
                            <?php
                        }
                    }

                  ?>      
            <div class="clear-fix"></div>
        </div>
    </div>
    <!--End Of Food Section-->
<?php
include("partials/footer.php");?>