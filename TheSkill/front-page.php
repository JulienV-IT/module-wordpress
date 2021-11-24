<?php get_header(); ?>


<section>
<article>
<div id="content">
  <?php $query = new WP_Query(('posts_per_page=3'));?>
<?php if($query -> have_posts()) : ?>
 <?php  while($query -> have_posts() ) : $query -> the_post(); ?>
</article>
 <article>
 <div  class="posted_container">
   <div class="cadre_post">
   <?php if(has_post_thumbnail()):?>
   <div class="post"><?php  the_post_thumbnail('post');?></div>
   <?php else:?>
     <div><p><?php  the_post_thumbnail('post');?><p/></div>
   <?php endif;?>

     <div>

         <div class="category"><?php the_category(',');?></div>
       <div  class=" ">
         <?php the_title();?>
       </div>
       <div class=""><?php the_time();?></div>
       <div  class="">
         <?php the_excerpt();?>
       </div>

       <a href="<?php the_permalink();?>">
        <p><?php esc_html_e("READ ARTICLE","TheSkill");?></p>

       </a>
     </div>
   </div>
   </article>
   <?php  endwhile; ?>
 <?php else : ?>
   <?php  esc_html_e('Sorry,no posts were found',"TheSkill");?>
 <?php endif; ?>
 </div>

</div>
</article>
</section>


<?php get_footer();?>
