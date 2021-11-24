<?php get_header();?>
      <main>
          <?php the_post();?>
          <div id="content" class="comments-border flex flex-col md:flex-row w-10/12  h-auto mx-auto mt-16 border-solid rounded-xl mb-12">
          <div class="w-full">
            <div class=" text-white  p-6 ml-6 text-lg lg:text-2xl font-bold capitalize"><?php the_title();?></div>
            <div class="flex flex-row w-42 ml-12">
              <div class="text-1xl text-yellow-500"><?php the_category();?></div>
              <div class="text-1xl text-white ml-8"><?php the_time();?></div>
            </div>
           <?php if(has_post_thumbnail()):?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),$size=array(530,353)); ?>
            <div class=" pl-12 pt-3"><img src="<?php echo esc_url($featured_img_url)?>" alt="The post thumbnail"></div>
            <?php endif;?>
            <div class=" pl-12 pt-6 pr-12 text-white text-md lg:text-xl"><?php the_content();?>
              <div class="hidden"><?php the_tags();?></div>
            </div>


          </div>
        </div>
      </main>

      
<?php get_footer();?>
