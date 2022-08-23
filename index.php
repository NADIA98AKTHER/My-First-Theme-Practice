<?php

get_header();
?>
<!-------Resource--------->
<div class="resource">
    <div class="Frame_56">
        <div class="Frame_15_resource">
           <p class="Frame_15_t1"> Resources for WooCommerce Store Owners</p>
           <p class="Frame_15_t2">Tips, tricks and eCommerce inspiration from WooCommerce experts.</p>
        </div>
        <div class="Frame_55">
            <div class="Frame_54_resource">
                <p class="Frame_54_t">Enter Name</p>

            </div>
            <div class="t1_resource">
                <input class="btn btn-primary" type="submit" value="Subscribe">

        </div>

        </div>
        <div class="Frame_57">
            <p class="follow">Follow us on</p>
            <div class="Frame_49_icon_i">
               

            </div>

        </div>


    </div>

    <div class="Frame_31">
        <img class="Frame_31_img1" src="<?php echo get_template_directory_uri(); ?>/images/unsplash_h8CYq5InIAI.png">
        <div class="Frame_35"> 
            
            <div class="Frame_32">
            <p class="Ecoomerce">Ecommerce</p>
            <p class="Frame_32_t1">Why Your Website Speed Should Matter</p>
            <p class="Frame_32_t2">Starting a business? Launching your dream product? You must...</p>
            </div>

        </div>
    </div>
    <div class="Frame_32_2">
        <img class="Frame_31_img1" src="<?php echo get_template_directory_uri();?>/images/unsplash_376KN_ISplE.png">
        <div class="Frame_35">
            <div class="Frame_32">
            <p class="Ecoomerce">Ecommerce</p>
            <p class="Frame_32_t1">Why you should have a booking extension on your website </p>
            <p class="Frame_32_t3">Starting a business? Launching your dream product? You must...</p>
            </div>

        </div>

    </div>
    
    
    

</div>

<!--------Blog----------->
<div class="Frame_63">
    <div class="Frame_60">
       <div class="Frame_58">
        <p class="Frame_58_t1">All</p>
       </div>
       <div class="Frame_59">
        <p class="Frame_59_t1">eCommerce </p>
       </div>
       <div class="Frame_60_1">
        <p class="Frame_60_1_t1">eCommerce Website</p>
       </div>
       <div class="Frame_61_1">
        <p class="Frame_61_1_t1">WooCommerce Booking </p>
       </div>
       <div class="Frame_62_1">
        <p class="Frame_62_1_t1">WooCommerce Booking </p>
       </div>
       

    </div>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">

  <div class="row">
    <?php 
      while(have_posts()){

      the_post();
    
    ?>
    <div class="col">
      <div class="grid">
      <img class="prec" src="<?php echo get_template_directory_uri();?>/images/unsplash_IgUR1iX0mqM.png">
      <div class="grid_content">
      <div class="ecom">
      <p class="ecom_t"> Ecommerce</p>
      <p class="ecom_t2"><?php the_title();?></p>
      <p class="ecom_t3"><?php the_title();?></p>
      </div>
 

      </div>
      </div>
    </div>
    <?php } ?>
    

   
    
    


  </div>
</div>


<?php
get_footer();
?>