
<?php include("partials/menu.php");?>
    <!--Start of search section-->
<div class="food-search">
    <div class="wrapper text-centre">
        <form action="<?php echo HOMEURL;?>food-search.php" method="POST">
             <input type="search" name="search" placeholder="Input Food To Search"><br><br>
             <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</div>
    <!--End of search section-->

    
    <!--Start Of Category Section-->
    <div class="category-menu">
        <div class="wrapper">
            <center><h1>Category</h1></center>
            <?php
              $sql1 = "SELECT * FROM tbl_category WHERE active='YES' AND featured='YES'";
              $res1 = mysqli_query($conn,$sql1);
              if($res1==true){
                  $count = mysqli_num_rows($res1);
                  if($count>0){
                      while($rows1=mysqli_fetch_assoc($res1)){
                          $category_id = $rows1["id"];
                          $category_image = $rows1["image_name"];
                          $category_name = $rows1["title"];
                            ?>
                            <a href="<?php echo HOMEURL;?>category.php?cat_id=<?php echo $category_id; ?>" >
                               <div class="food-box float-food-box">
                                   <?php
                                      if($category_image!=""){
                                          ?>
                                            <img src="<?php echo HOMEURL; ?>images/category/<?php echo $category_image; ?>" alt="Food Category Goes Here" class="img-responsive img-curve">
                                          <?php
                                      }else{
                                          echo "<div class='error'>Category Image Not Available</div>";
                                      }
                                   ?>
                                    <div class="food-text float-food-text"><?php echo $category_name;?></div>
                                </div>
                            </a>
                            <?php
                      }
                  }
              }
            ?>
            <div class="clear-fix"></div>
        </div>
    </div>
    <!--End Of Category Section-->

    <!--Start Of Food and drinks Section-->
    <div class="food-item">
        <div class="wrapper">
            <center><h1>Food and Drinks</h1></center>
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
    <!--End Of Food and drinks Section-->
    <?php include("partials/footer.php");?>