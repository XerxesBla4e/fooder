<?php
include("partials/menu.php");?>

   <!--Start of search section-->
   <div class="food-search">
    <div class="wrapper text-centre">
       <!--retrieve search food or description-->
       <?php
         $search = $_POST['search'];
       ?>
       <h2 class="text-white">Food On Your Search <?php echo $search; ?></h2>
    </div>
</div>
    <!--End of search section-->

    <!--Start Of Food Section-->
    <div class="food-item">
        <div class="wrapper">
            <center><h1>Food</h1></center>
            <?php
              $sql = "SELECT * FROM tbl_food WHERE title LIKE '%search' OR description LIKE '%search'";
              $res = mysqli_query($conn,$sql);
              if($res==true){
                  $count = mysqli_num_rows($res);
                  if($count>0){
                      while($row=mysqli_fetch_assoc($res)){
                          $id = $row["id"];
                          $image_name = $row["image_name"];
                          $title = $row["title"];
                          $price = $row["price"];
                          $description = $row["description"];
                          ?>
                                 <div class="Food-menu-box">
                                    <div class="Food-image">
                                        <?php
                                           if($image_name!=""){
                                               ?>
                                      <img src="<?php echo HOMEURL;?>images/food/<?php echo $image_name;?>" alt="Food Image Goes Here" class="img-responsive img-curve">
                                               <?php                          
                                           }else{
                                               echo "<div class='error'>Image Not Available</div>";
                                           }
                                        ?>
                                    </div>
                                    <div class="Food-description">
                                        <h3><?php echo $title; ?></h3>
                                        <p class="food-price"><?php echo $price; ?></p>
                                        <p><strong><?php echo $description; ?></strong></p>

                                        <a href="order.php" class="btnlink btn-primary">Order</a>
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