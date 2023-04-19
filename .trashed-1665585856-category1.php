<?php
include("partials/menu.php");?>

 <!--Start of search section-->
 <div class="food-search">
    <div class="wrapper text-centre">
       <h2 class="text-white">CATEGORY SECTION</h2>
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


<?php
include("partials/footer.php");?>