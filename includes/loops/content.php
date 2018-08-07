<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>

<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header class="blog">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'bst'); ?>: <?php exclude_post_categories('1'); ?><br/>
            </p>
        </header>
        <section>
        		<div class="row">
        		   <div class="col-sm-8">
        				<?php the_excerpt(); ?>
        			</div>
        			<div class="col-sm-4">
        				<?php the_post_thumbnail('medium_size_w', array( 'class'  => 'alignright featured')); ?>
        			</div>
        		</div>
            <div class="clearfix"></div>
        </section>
    </article>
    <hr class="blog">
<?php endwhile; ?>

<?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
