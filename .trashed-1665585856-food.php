<?php
include("partials/menu.php");?>

 <!--Start of search section-->
 <div class="food-search">
    <div class="wrapper text-centre">
       <h2 class="text-white">FOOD SECTION</h2>
    </div>
</div>
    <!--End of search section-->

 <!--Start Of Food Section-->
 <div class="food-item">
        <div class="wrapper">
            <center><h1>Food</h1></center>
            <?php
             $sql = "SELECT * FROM tbl_food WHERE active='YES' AND featured='YES'";
             $res = mysqli_query($conn,$sql);
             if($res==true){
                 $rows = mysqli_num_rows($res);
                 if($rows>0){
                     while($row = mysqli_fetch_assoc($res)){
                         $id = $row["id"];
                         $food_image_name= $row["image_name"];
                         $food_price = $row["price"];
                         $food_title = $row["title"];
                         $food_description = $row["description"];

                            ?>
                        <div class="Food-menu-box">
                            <div class="Food-image">
                                <?php
                                 if($food_image_name!=""){
                                    ?>
                                    <img src="<?php echo HOMEURL;?>images/food/<?php echo $food_image_name; ?>" alt="Food Image Goes Here" class="img-responsive img-curve">
                                   <?php 
                                 }else{
                                     echo "<div class='error'>Image Not Available</div>";
                                 }
                                ?>
                            </div>
                            <div class="Food-description">
                                <h3 class="food-title"><?php echo $food_title; ?></h3>
                                <p class="food-price"><?php echo $food_price; ?></p>
                                <p class="food-des"><strong><?php  echo $food_description; ?></strong></p><br>

                                <a href="<?php echo HOMEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btnlnk btn-primary">Order</a>
                          </div>
                        </div>
                            <?php
                     }
                 }
             }

            ?>
            <div class="clear-fix"></div>
        </div>
    </div>
    <!--End Of Food Section-->

<?php
include("partials/footer.php");?>