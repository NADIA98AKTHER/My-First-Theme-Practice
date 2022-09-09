<?php

get_header();
if(isset($_POST['Subscribe'])){
  echo"s";
}
?>
<!-------Resource--------->
<div class="resource">
    <div class="Frame_56">
        <div class="Frame_15_resource">
           <div class="Frame_15_t1"><?php dynamic_sidebar('blog_content1');?></div>
          
        </div>
        <form method="post">
        <div class="Frame_55">
            <div class="Frame_54_resource">
                <input type="text" name="ntitle" class="Frame_54_t">Enter Name</p>

            </div>
            <div class="t1_resource">
                <button name="Subscribe" type="submit" value="Subscribe">Subscribe</button>

        </div>

        </div>
</form>
        <div class="Frame_57">
            <p class="follow">Follow us on</p>
            <div class="Frame_49_icon_i">
               

            </div>

        </div>


    </div>
   
    <div class="col">
    <?php

$the_query = new WP_Query( 'posts_per_page=2' ); ?>
  
<?php

while ($the_query -> have_posts()) : $the_query -> the_post();

$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
?>
  

    <div class="grid">
     
      
 
     <img class="prec" src="<?php echo $imagepath[0]?>">
     <div class="grid_content">

     <div class="ecom">
        <p class="ecom_t"><?php the_category();?></p>
        
     </div>
     <p class="ecom_t2"><?php the_title();?></p>
        <div class="ecom_t3"><?php the_excerpt();?>
        <div class="readmore">
     <a href="<?php the_permalink();?>"><input type="button" value="Read More" name=""></a>
     </div>
       </div>
      

     </div>
   
     </div>
  
   </div>
 

   <div>
<?php
endwhile;
wp_reset_postdata();
?>
      
    

</div>



<!--------Blog----------->
<div class="Frame_63">
    <div class="Frame_60">
    
       <div class="con2">
      <div class="cat">
         
     
      <div class="col-xs-7">
     
       <div class="Frame_59">
   
    
        <div class="Frame_59_t1"><?php dynamic_sidebar('Add');?></div>
      
        </div>
       
     
      </div>

     
      

      
</div>

</div>

    </div>

    
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="con">

  <div class="col-xs-6">
  <?php 
      while(have_posts()){

      the_post();
      $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    
    ?>
    <div class="col">
    
      <div class="grid">  
      <img class="prec" src="<?php echo $imagepath[0]?>">
      <div class="grid_content">

      <div class="ecom">
         <p class="ecom_t"><?php the_category(); ?></p>
         
      </div>
      <p class="ecom_t2"><?php the_title();?></p>
         <div class="ecom_t3"><?php the_excerpt();?>
         <div class="readmore">
      <a href="<?php the_permalink();?>"><input type="button" value="Read More" name=""></a>
      </div>
        </div>
       

      </div>
      
      </div>
  
    </div>
    <?php } ?>
    
    <div>
   
   
  </div>
  
</div>

<div class="Page">
    <div class="pagination">
        <?Php next_posts_link(); ?>
       <?php previous_posts_link(); ?>
    </div>
      </div>
<?php
get_footer();
?>
