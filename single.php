<?php 

get_header();
the_post();
?>

<div class="single">
  <div class="single_con">
  <diV class="single_titlte">
    <p class="single_titile_1"><?php the_title();?></p>
    <?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    ?>
    <img class="img_single" src="<?php echo $imagepath[0]?>" width="500px">
    <div class="author">
    
     <p class="author_name">By <?php the_author(); ?></p>
 
    </div>   
    <div class="date">
        <?php echo get_the_date();?>
    </div>
    <div class="single_content">
        <p class="single_content_blog"><?php the_content();?></p>
    </div>
    <div class="form">
    <?php comment_form();?>
    </div>
  </div>
  </div> 
  
   </div>
</div>

<?php 
get_footer();

?>